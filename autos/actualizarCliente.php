<?php
include("conexion.php");

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$licencia=$_POST['licencia'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$actualizado=false;

if($cedula!=null){

	if($nombre!=null){
		$query1="UPDATE cliente set nombre='$nombre' WHERE cedula='$cedula';";
		$result=$conexion -> query($query1);
		if($result){
			$actualizado=true;
		}
	}

	if($licencia!=null){
		$query1="UPDATE cliente set licencia='$licencia' WHERE cedula='$cedula';";
		$result=$conexion -> query($query1);
		if($result){
			$actualizado=true;
		}
		else{
			$actualizado=false;
		}
	}

	if($telefono!=null){
		$query1="UPDATE cliente set telefono='$telefono' WHERE cedula='$cedula';";
		$result=$conexion -> query($query1);
		if($result){
			$actualizado=true;
		}
		else{
			$actualizado=false;
		}
	}

	if($direccion!=null){
		$query1="UPDATE cliente set direccion='$direccion' WHERE cedula='$cedula';";
		$result=$conexion -> query($query1);
		if($result){
			$actualizado=true;
		}
		else{
			$actualizado=false;
		}
	}

	if($actualizado==true){
		echo '<script languaje="javascript"> 
    					alert("Los datos han sido modificados");
    		           history.back();</script>';
	}
	else{
		echo '<script languaje="javascript"> 
    					alert("Problema al modificar los datos");
    		           history.back();</script>';
	
	
	}

}else{
	echo '<script languaje="javascript"> 
    					alert("Debe ingresar la cedula, para realizar la modificacion");
    		           history.back();</script>';
}




?>