<?php
include('conexion.php');
$documento=$_POST["documento"];
mysqli_query($conexion,"update docente set nombre='$_POST[nombre]', apellidos='$_POST[apellidos]', sexo='$_POST[sexo]', fecha='$_POST[fecha]',lugar='$_POST[lugar]',direccion='$_POST[direccion]',barrio='$_POST[barrio]',eps='$_POST[eps]',rh='$_POST[rh]',lugar='$_POST[lugar]',direccion='$_POST[direccion]',barrio='$_POST[barrio]',eps='$_POST[eps]',rh='$_POST[rh]', grado='$_POST[grado]' where documento='$documento'") or die ("problemas en el select:". mysqli_error(  $conexion));
echo "El archivo fue modificado con exito";
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   
   <a href="mostrardatosdocente.php">Docentes</a>
</body>
</html>
