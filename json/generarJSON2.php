<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "cine";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM `empleado`";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$alumnos = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
	$nombre=$row['nombre'];
	$apellido=$row['apellido'];
	$fechacontrat=$row['fechacontrat'];
	$correo=$row['correo'];
	$direccion=$row['direccion'];
	$IDempleado=$row['IDempleado'];
	
	
	

	$alumnos[] = array('nombre'=> $nombre, 'apellido'=> $apellido, 'fechacontrat'=> $fechacontrat, 'correo'=> $correo, 'direccion'=> $direccion,'IDempleado'=> $IDempleado);

}
	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$alumnos['alumnos'] = $alumnos;
$json_string = json_encode($alumnos);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>