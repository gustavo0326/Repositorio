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


<div id="content">

    
 <div class="modifica">
             <form action="modificarCliente.php" method="POST">
                <h3>Modificar datos Cliente</h3>
                <table>
                 <p id="cedula">
                  <tr>
                    <td><label for="cedula">  C&eacute;dula:    </label></td>
                    <td><input name="cedula" id="cedula" type="text" required /></td>
                 </p>
                </table>
                <center>
                  <div class="boton"><button type="submit">Buscar</button></div>
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
