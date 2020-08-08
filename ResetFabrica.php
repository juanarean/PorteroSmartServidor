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


   $dbhost = 'localhost';// direccion IP de la instancia que corre en AWS.
   $dbuser = 'root';// nombre de usuario en musql
   $dbpass = 'careglio';// contraseña de base de datos
   $dbname = 'Portero_Smart';// nombre de proyecto de base de datos
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);//funcion que gestiona la conexion con base de datos 

   if(! $conn ) {
      die('Error Conexion: ' . mysqli_error());
   }


   
   $sql="DELETE FROM ".$VarSession."";
   
   if (mysqli_query($conn, $sql))
	   {// si se pudo actualizar la base de datos indica un reporte de actualizacon correcta
			echo "<b>SE BORRO LA BASE DE DATOS (*)</b>";
			echo "<br><br>";
			header("Location:http://192.168.43.177/reset");
			echo "(*)Puede cerrar la ventana";
   		} 
		else
		{
      	echo "Error en la Base de Datos: " . mysqli_error($conn);// en caso de error tambien lo indica
   		}
   		
		
		mysqli_close($conn);// cierra conexion con base de datos

   
   
   
   

?>


