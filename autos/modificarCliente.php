
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Alquiler de Carros</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
  include "style/bootstrap.php";
  include "style/plantilla.php";
?>
<div id="content">

<?php
include("conexion.php");

$cedula=$_POST['cedula'];

$query1="SELECT * FROM cliente WHERE cedula='$cedula';";
$result=$conexion -> query($query1);
if ($result!=null) {

	 $resultado =  $result->fetch_all(MYSQLI_ASSOC);	

          foreach ($resultado as $fila ) {

                         echo"<div class='resultado'>"; 
                         echo "<label for='nombre'>Nombre:".$fila["nombre"]." </label><br>";
                         echo "<label for='cedula'>Cedula:".$fila["cedula"]." </label><br>";
                         echo "<label for='licencia'>No Licencia:".$fila["licencia"]." </label><br>";
                         echo "<label for='telefono'>Telefono:".$fila["telefono"]." </label><br>";
                         echo "<label for='direccion'>Direccion:".$fila["direccion"]." </label><br>";
                         echo "</div>";
            }
                         
            
        
}else{
	echo "cliente no encontrado";
}

?>
<form action="actualizarCliente.php" method="post">

<h3>Ingrese los campos que desea modificar</h3><br>

<div class="renta">

    <table>
              
                <p id="cedula">
                    <tr>
                        <td><label for="cedula">  C&eacute;dula:    </label></td>
                        <td><input name="cedula" id="cedula" type="text"  /></td>
                    </tr>
                </p>
                

                <p id="nombre">
                   <tr>
                    <td><label for="nombre">Nombre: </label></td>
                    <td><input name="nombre" id="nombre" type="text"  /></td>
                   </tr>
                    
                </p>
                               
               
                <p id="licencia">
                   <tr>
                    <td><label for="licencia">No.Lic.conducci&oacute;n:   </label></td>
                    <td><input name="licencia" id="licencia" type="text"  /></td>
                   </tr>
                </p>

                 <p id="telefono">
                  <tr>
                    <td><label for="telefono"> Telefono:   </label></td>
                    <td><input name="telefono" id="telefono" type="text" /></td>
                  </tr>
                </p>
              
              <p id="direccion">
              <tr>
                    <td><label for="licencia">Direcci&oacute;n:   </label></td>
                    <td><input name="direccion" id="direccion" type="text" /></td>
               </tr> </p>
              
              </table>
              <center>
                <div class="boton"><button type="submit">Aceptar</button></div>
              </center>
              
    
</div>
</form>

<div class="clear"></div>
</div>

<div class="clear"></div>

<?php
  include "style/menuhorizontalpie.php";
  
?>

</div>
</div>
</body>
</html>