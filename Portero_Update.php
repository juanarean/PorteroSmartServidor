<?php
//robots.php?Ptopico=xx&Stopico=xxxxxxxxx&UF=xx&Timbre=xxxx&Nombre=xxx&Apellido=xxxxx&Mail]=xxxx&Password=xxxxx&PassworConfirm=xxxxx

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


$date = date("d-M-Y"); 
$time = date("H:i"); 

//PAGINA DE INICIO DE RECEPCION DE DATOS
echo "<h2>Portero_Smart - Notificacion de recepcion</h2>";
echo "<hr></hr>";
echo "Fecha: ". $date;
echo "<br>";
echo "Hora: ". $time;
echo "<br>";
echo "<br>";
echo "<br>";
//if($id_robot == "" or $ubicacion == "" or $estado_motor == "")
//{
	//echo "Datos incompletos, por favor reenvie en forma correcta";
	//echo "<br><br>";
//}
//else
//{

//MUESTRA LOS DATOS
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
//Actualiza la tabla "0001PS052019V4_0" de la bas de datos Portero_Smart 
for($j=0;$j<count($UF);$j++)// cuata la cantidad de datos que tiene el array y actualiza los datos en la tabla.
		{

			
		$sql="UPDATE 0001PS052019V4_0 SET Timbre='".$Timbre[$j]."',Nombre='".$Nombre[$j]."', Apellido='".$Apellido[$j]."', Mail='".$Mail[$j]."',Password='".$Password[$j]."' , TopicoPublicar='".$Ptopico."', TopicoSuscribir='".$Stopico."'  WHERE UF='".$UF[$j]."'";
		
		
	   if (mysqli_query($conn, $sql)) {// si se pudo actualizar la base de datos indica un reporte de actualizacon correcta
			echo "<b>Reporte OK (*)</b>";
			echo "<br><br>";
			echo "(*)Puede cerrar la ventana";
   		} else {
      	echo "Error en la Base de Datos: " . mysqli_error($conn);// en caso de error tambien lo indica
   		}
   		
		}
		mysqli_close($conn);// cierra conexion con base de datos

	#	if($id_robot == "5")shell_exec('/var/www/html/bash_scripts/ejecutar_esto.sh');
//}

?>
