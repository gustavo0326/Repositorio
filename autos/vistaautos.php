
<!DOCTYPE html>
<html lang="es">
<head>	
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Alquiler de Carros</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php
  //include "style/bootstrap.php";
  include "style/plantilla.php";
?>
	
	<center><br><br/><br><br/>
		<div id="car">

<form  action="guardarAuto.php" method="POST" enctype="multipart/form-data">

<table>
     <p id="placa"> 
      <tr>
                
          <td><label for="placa">  Placa:    </label></td>
         <td> <input name="placa" id="placa" type="text"  /></td>
      </tr>
    </p>

     <p id="foto"> 
      <tr>
                
          <td><label for="foto">  Subir foto:    </label></td>
          <td><input type="file" name="imagen"  /></td>
      </tr>
    </p>

    <p id="tipo"> 
      <tr>
                
          <td><label for="tipo">  Tipo:    </label></td>
         <td> <input name="tipo" id="tipo" type="text"  /></td>
      </tr>
    </p>

     <p id="marca"> 
      <tr>
                
          <td><label for="marca">  Marca vehículo:    </label></td>
          <td>
            <select name="Marca de vehiculo">
              <option value="1">Mazda</option> 
              <option value="2">Renault</option> 
              <option value="3">Audi XP</option>
              <option value="10">Ferrari</option> 
              <option value="11">Mclaren</option> 
              <option value="12">Lamborghini</option> 
            </select>

          </td>
          
      </tr>
    </p>

    <p id="capacidad"> 
      <tr>
                
          <td><label for="capacidad">  Capacidad:    </label></td>
         <td> <input name="capacidad" id="capacidad" type="text"  /></td>
      </tr>
    </p>

     <p id="precio"> 
      <tr>
                
          <td><label for="precio"> Precio x Hora:    </label></td>
         <td> <input name="precio" id="precio" type="text"  /></td>
      </tr>
    </p>

     <p id="color"> 
      <tr>
                
          <td><label for="color"> Color:    </label></td>
         <td> <input name="color" id="color" type="text"  /></td>
      </tr>
    </p>

     <p id="modelo"> 
      <tr>
                
          <td><label for="modelo"> Modelo:    </label></td>
         <td> <input name="modelo" id="modelo" type="text"  /></td>
      </tr>
    </p>

     <p id="kilometraje"> 
      <tr>
                
          <td><label for="kilometraje"> Kilometraje:    </label></td>
         <td> <input name="kilometraje" id="kilometraje" type="text"  /></td>
      </tr>
    </p>

     <p id="precio"> 
      <tr>
                
          <td><label for="precio"> Precio x Hora:    </label></td>
         <td> <input name="precio" id="precio" type="text"  /></td>
      </tr>
    </p>

</table>

<center>
  <div class="boton"><input type="submit" value="Enviar !" /></div>
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

<!--	</center>
	

<br><br/><br><br/>
<br><br/><br><br/>

 <?php
 // include "style/menuhorizontalpie.php";

?>

</div>
</body>
</html>-->
