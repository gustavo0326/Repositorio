<?php
include("conexion.php");


$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$licencia=$_POST['licencia'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];



$query1="INSERT INTO cliente (nombre,cedula,licencia,telefono,direccion)VALUES ('$nombre','$cedula','$licencia',$telefono,'$direccion');";
$resultado=$conexion -> query($query1);
if ($resultado) {
	echo "se guardo el cliente";
}else{
	echo "no se guardo el cliente";


}
?>

