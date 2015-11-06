
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Alquiler de Carros</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
 // include "style/bootstrap.php";
  include "style/plantilla.php";
?>

<div id="contenidoRenta">
    

    <div class="renta">
     <form action="guardarFormularioRenta.php" method="POST"> <!-- Formulario para registrar un usuario.-->
                <h3>Formulario renta de veh&iacute;culo</h3>
            <table >
                <p id="placa">
                   <tr>
                    <td><label for="placa">Placa:</label></td>
                    <td><input  name="placa" id="placa" type="text"  /></td>
                  </tr>
                </p>

                <p id="fechaInicio"> 
                    <tr>
                
                        <td><label for="fechaInicio">  Fecha alquiler:    </label></td>
                        <td><input type="date" name="fechaInicio" /></td>
                    </tr>
                </p>

                <p id="horaInicio"> 
                    <tr>
                
                        <td><label for="horaInicio">  Hora alquiler:    </label></td>
                        <td><input type="time" name="horaInicio" /></td>
                    </tr>
                </p>

         
              
                <p id="nombre">
                  <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input name="nombre" id="nombre" type="text" required /></td>
                  </tr>
                </p>
                               
                <p id="cedula">
                  <tr>
                    <td><label for="cedula">  C&eacute;dula:    </label></td>
                    <td><input name="cedula" id="cedula" type="text" required /></td>
                  </tr>
                </p>

                <p id="licencia">
                  <tr>
                    <td><label for="licencia">No. Lic. conducci&oacute;n:   </label></td>
                    <td><input name="licencia" id="licencia" type="text" required /></td>
                  </tr>
                </p>

                 <p id="telefono">
                   <tr>
                    <td><label for="telefono">Telefono:   </label></td>
                    <td><input name="telefono" id="telefono" type="text" required /></td>
                  </tr>
                </p>
              
              <p id="direccion">
                  <tr>
                    <td><label for="licencia">Direcci&oacute;n:   </label></td>
                    <td><input name="direccion" id="direccion" type="text" required /></td>
                  </tr>
                </p>
                
              </table> 
              <center>
                <div class="boton"><button type="submit">Aceptar</button></div>
              </center> 
              
            </form>
        </div>

       



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
