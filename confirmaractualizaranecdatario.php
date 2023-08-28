<?php
include('conexion.php');
$documento=$_POST["documento"];
mysqli_query($conexion,"update acudiente set Fecha iniciacion de la ficha='$_POST[fecha iniciacion]', Nombres completos='$_POST[nombre estudiante]', Documento='$_POST[documento estudiante]',Fecha de nacimiento='$_POST[fecha de nacimiento]', Direccion de residencia='$_POST[direccion]', Nombre de la madre='$_POST[nombre de la madre]', Cedula='$_POST[documentom]', Contacto='$_POST[telefonom]', Nombre del padre='$_POST[nombre del padre]', Cedula='$_POST[documentop]', Contacto='$_POST[telefonop]', Otro acudiente='$_POST[acudiente]', Parentesco='$_POST[parentesco]', Contacto='$_POST[telefonoacu]', Docente='$_POST[docente]', Grado='$_POST[grado]', Año='$_POST[año]', where documento='$documento'") or die ("problemas en el select:". mysqli_error(  $conexion));
echo "El archivo fue modificado con exito";
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   
   <a href="anecdatario.php">Anecdatario</a>
</body>
</html>
