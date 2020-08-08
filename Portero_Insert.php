
<html>   
<head>
<meta charset="utf-8">       
<title>PSMART</title>
<script>
</script>
<style type="text/css">
.outter
{
height:25px;
width:300px;
border:solid 1 px #000;	
}
.inner
{
height:25px;
width:<?php //echo $Porcentaje?>;
border-right:solid 1 px #000;	
background-color:lightblue;

}
</style>

</head>

<body>
<div>
<p>N°Serie Dispositivo conectado: <?php echo $VarSession?><br>
<a href="Panel.php">Volver Panel Principal<br></a>
<a href="CerrarSesion.php">Cerrar Sesion Psmart<br></a>
</div>

<!--GUARDANDO EN BASE DE DATOS<?php //echo $RegistrosGuardados "/" .$TotalRegistros;?>
<div class="outter">

<div class="inner">

</div>
</div>
-->


</body>
</html>


<?php

session_start();
$VarSession=$_SESSION['NSerieSesion'];
if( $VarSession==null|| $varseession="")
{
	echo "Usted debe logearse para ingresar a esta pagina:";
	die();
	
}

//Portero_Insert.php?Ptopico=xx&Stopico=xxxxxxxxx&UF=xx&Timbre=xxxx&Nombre=xxx&Apellido=xxxxx&Mail=xxxx&Password=xxxxx&PassworConfirm=xxxxx

// Programa que recibe de pagina HTML por metodo POST los valores de un formulario por medio de una tabla

   $dbhost = 'localhost';// direccion IP de la instancia que corre en AWS.
   $dbuser = 'root';// nombre de usuario en musql
   $dbpass = 'careglio';// contraseña de base de datos
   $dbname = 'Portero_Smart';// nombre de proyecto de base de datos
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);//funcion que gestiona la conexion con base de datos 

   if(! $conn ) {
      die('Error Conexion: ' . mysqli_error());
   }

//DECLARACION DE VARIABLES DONDE SE VAN A ALOJAR LOS DATOS ENVIADOS DESDE LA PAGINA HTML POR MEDOTO POST
$Ptopico = $_POST['Ptopico'];
$Stopico = $_POST['Stopico'];
$UF = $_POST['UF'];
$Timbre = $_POST['Timbre'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Mail = $_POST['Mail'];
$Password = $_POST['Password'];
$PassworConfirm = $_POST['PassworConfirm'];
$NumeroSerie=$_POST['NumeroSerie'];



//$date = date("d-M-Y"); 
//$time = date("H:i"); 

//PAGINA DE INICIO DE RECEPCION DE DATOS
/* echo "<h2>Portero_Smart - Notificacion de recepcion</h2>";
echo "<hr></hr>";
echo "Fecha: ". $date;
echo "<br>";
echo "Hora: ". $time;
echo "<br>";
echo "<br>";
echo "<br>";
 */





//MUESTRA LOS DATOS
echo "Numero de serie del Dispositivo:". $NumeroSerie;
echo "<br>";

/*
for ($i=0;$i< count($UF);$i++)
{
		echo "Topico a Publicar: ".$Ptopico;
		echo "<br>";
		echo "Topico suscripcion: ".$Stopico;
		echo "<br>";
		echo "Unidad Funcinal: ".$UF[$i];
		echo "<br>";
		echo "Timbre: ".$Timbre[$i];
		echo "<br>";
		echo "Nombre Propietario: ".$Nombre[$i];
		echo "<br>";
		echo "Apellido Propietario: ".$Apellido[$i];
		echo "<br>";
		echo "Mail: ".$Mail[$i];
		echo "<br>";
		echo "Password: ".$Password[$i];
		echo "<br>";
		echo "PassworConfirm: ".$PassworConfirm[$i];
		echo "<br>";
		echo "<br>";
		echo"<br>";
		
}

*/
//GUARDA LOS DATOS INGRESADOS EN EL FORMULARIO EN LA TABLA QUE CORREPNDE CON EL NUERMO DE SERIE DEL DISPOSITIVO 

$TotalRegistros=count($UF);
$RegistrosGuardados=0;
$Porcentaje=0;
//echo "Cantidad de Registros cargados: ".$TotalRegistros;

//echo "Guardando en Base de Datos";

$_submit="?CantUnidades=".$TotalRegistros;	
		
for($j=0;$j<count($UF);$j++)// cuata la cantidad de datos que tiene el array y actualiza los datos en la tabla.
		{
	
		$sql="INSERT INTO  ".$NumeroSerie." (UF,Timbre,Nombre,Apellido,Mail,Password,TopicoPublicar,TopicoSuscribir,TopicoExtra) VALUES('".$UF[$j]."','".$Timbre[$j]."','".$Nombre[$j]."', '".$Apellido[$j]."','".$Mail[$j]."','".$Password[$j]."','".$Ptopico."','".$Stopico."','EXTRA TOPICO')";
		
	
		/*echo '<input type="text" value="<?php echo $UF[1]?>"/>';*/
		
	   if (mysqli_query($conn, $sql)) {// si se pudo ingresar los datos
			/* echo "<b>Reporte OK (*)</b>";
			echo "<br><br>";
			echo "(*)Puede cerrar la ventana"; */
			$RegistrosGuardados=$RegistrosGuardados+1;
			$Porcentaje=($RegistrosGuardados/$TotalRegistros)*100;
			//echo "<br># Usuario:".$Apellido[$j];
		
		
		$submit_="&UF".$j."=".$UF[$j]."&Timbre".$j."=".$Timbre[$j];
		$_submit=$_submit.$submit_;
		
		} else
		{
      	echo "Error en la Base de Datos: " . mysqli_error($conn);// en caso de error tambien lo indica
		echo "<br>";
		echo '<a href="Panel.php" style="color:red;font-size:30px";>Volver a Panel Principal</a>';
   		}
   		
		}
		mysqli_close($conn);// cierra conexion con base de datos

	#	if($id_robot == "5")shell_exec('/var/www/html/bash_scripts/ejecutar_esto.sh');
//}

?>
<!--//////////////////////////PAGINA HTML DE BARRA DE PROCESO DE GAUDRADO
-->










<?php
// ENVIO MAIL INGRESADOS EN LA TABLA CON EL NOMNRE DE USURAIO Y CONTRASEÑA






echo "<br>Enviando mail a usuarios";
for($j=0;$j<count($UF);$j++)
{
// donde envio mail

//$nombre=$_POST['nombre'];
//$correo=$_POST['correo'];
$mensaje="Bienvenido a Portero Smart, estos sn sus datos de usuario y contraseña:";
 
$cabecera="From: Portero Smart<porterosmart@gmail.com>";

 
//$contenido="Nombre: portero de la ostia";
$contenido="\nNombre: ".$Nombre[$j]."\nApellido: ".$Apellido[$j]."\nMensaje: ".$mensaje."\nNombre de Usuario: ".$Mail[$j]."\nContraseña: ".$Password[$j];
mail($Mail[$j],"USUARIO PSMART",$contenido,$cabecera);	
echo "<br>#Mail:".$Mail[$j];


}



?>

<html>   
<head>
<meta charset="utf-8">       
<title>PSMART</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-es.js"></script>

</head>


<body> 
<?php
//echo "Cadena de envio de subit:".$_submit;
$get="http://192.168.43.177/topicos".$_submit;
//echo "Cadena de envio de subit:".$get;

?>

<br>
<a href="<?php echo $get?>" style="font-size:30px;background:grey">Enviar datos  Modulo</a>


</body>




</html>
