<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query="INSERT INTO imagen (imagen,nombre)VALUES ('$imagen','$nombre')";
$resultado=$conexion -> query($query);
if ($resultado) {
	echo "se inserto";
}else{
	echo "no se inserto";
}

?>