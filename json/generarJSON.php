<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "cine"; //Nombre de las base de datos

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta con JOIN
$sql = "SELECT t1.IDventa, t1.pelicula, t1.descripcion, t1.cantidad, t1.precio, t2.IDempleado FROM venta t1 LEFT JOIN empleado t2 ON t1.IDempleado = t2.IDempleado;"; // conexion con JOIN
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) //datos 
{ 
	$IDventa=$row['IDventa'];
	$pelicula=$row['pelicula'];
	$descripcion=$row['descripcion'];
	$cantidad=$row['cantidad'];
	$precio=$row['precio'];
	$IDempleado=$row['IDempleado'];

	

	$clientes[] = array('IDventa'=> $IDventa, 'pelicula'=> $pelicula, 'descripcion'=> $descripcion, 'cantidad'=> $cantidad, 'precio'=> $precio, 'IDempleado'=> $IDempleado);

}

while($row = mysqli_fetch_array($result)) 

	
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
	

?>