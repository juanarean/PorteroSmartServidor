<?php
//Version 5.0
session_start();

   $dbhost = 'localhost';// direccion IP de la instancia que corre en AWS.
   $dbuser = 'root';// nombre de usuario en musql
   $dbpass = 'careglio';// contraseña de base de datos
   $dbname = 'Portero_Smart';// nombre de proyecto de base de datos
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);//funcion que gestiona la conexion con base de datos 

   if(! $conn ) {
      die('Error Conexion: ' . mysqli_error());
   }

   
   if($conn){
	   echo "Ok";
	   echo "<br>";
	   } 
   
//DECLARACION DE VARIABLES DONDE SE VAN A ALOJAR LOS DATOS ENVIADOS DESDE LA PAGINA HTML POR MEDOTO POST
$Nserie = $_POST['NumeSerie'];
$Pass= $_POST['Contrasena'];


echo "Numero de Serie de post:". $Nserie;
echo "<br>";
echo "PasswordReset:". $Pass;
echo "<br>";

$consulta="SELECT * FROM UsuariosPsmart WHERE Nserie='$Nserie' AND PasswordReset='$Pass'";


$resultado=mysqli_query($conn,$consulta);

//$filas=mysqli_fetch_array($resultado);

//echo"Cantidad de filas:".$resultado;


$row_cnt = mysqli_num_rows($resultado);

printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($resultado);


if($row_cnt>0)
		{
 		echo "Sesion inicada correctamente";
		$_SESSION['NSerieSesion']=$Nserie;
		$consulta1="SELECT * FROM $Nserie";
		$resultado1=mysqli_query($conn,$consulta1);	
		$CntDatos = mysqli_num_rows($resultado1);
		$_SESSION['DATOS']=$CntDatos;
		printf("\n La cantidad de registros son: %d", $CntDatos);
		header("Location:Panel.php");
		
		}
		else
		{
		echo"No tiene autorizacion";
		exit();
		}
	

	
mysqli_free_result($resultado1);
mysqli_close($conn);

?>
