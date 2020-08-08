<?php
//Version 5.0
session_start();
//echo "Respuesta desde Login";
//echo "<br>";

// Conexion a la base de datos sql de LAMP
   $dbhost = 'localhost';// direccion IP de la instancia que corre en AWS.
   $dbuser = 'root';// nombre de usuario en mysql
   $dbpass = 'careglio';// contrase�a de base de datos
   $dbname = 'Portero_Smart';// nombre de proyecto de base de datos
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);//funcion que gestiona la conexion con base de datos 

   if(! $conn ) {
      die('Error Conexion: ' . mysqli_error());
   }

   
  /* if($conn){
	   echo "Ok";
	   echo "<br>";
	   } 
   */
//DECLARACION DE VARIABLES DONDE SE VAN A ALOJAR LOS DATOS ENVIADOS DESDE LA PAGINA HTML POR MEDOTO POST
$Nserie = $_POST['NumeSerie'];
$Pass= $_POST['Contrasena'];
$User= $_POST['Usuario'];
/*echo $Nserie;
echo "<br>";
echo $Pass;
echo "<br>";
echo $User;
echo "<br>";
*/
$consulta="SELECT * FROM $Nserie WHERE Mail='$User' AND Password='$Pass'";

$resultado=mysqli_query($conn,$consulta); // hago al consulta y obtengo el resultado
$row=mysqli_fetch_assoc($resultado);
$array[]=$row;
$row_cnt = mysqli_num_rows($resultado); // veo cuantas filas tiene si da 0, es por que no existe

if($row_cnt>0)
        {
		//echo "Usuario encontrado con exito!";
		//echo "<br>";            
		echo json_encode($array);//$row['TopicoSuscribir'];
		//echo "<br>";
        }
        else
        {
            	echo "Usuario no encontrado";
        }

mysqli_free_result($resultado); // cierro el resultdo y la busqueda.
