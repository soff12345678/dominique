<?php
include('conexion.php');
$id=$_GET["doc"];
$result=mysqli_query($conexion,"select * from acudiente where documento='$id'") or die ("problemas en el select". mysqli_error(  $conexion));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar</title>
</head>
<body>
	<form method="post" action="confirmaractualizaracudiente.php">

<?php

  While ($row=mysqli_fetch_array($result)){

  	echo "<input type='text' name='nombre' id='nombre' value='".$row['nombre']."'><br>";
  	echo "<input type='text' name='apellidos' id='apelidos' value='".$row['apellidos']."'><br>";
  	echo "<input type='text' name='sexo' id='sexo' value='".$row['sexo']."'><br>";
    echo "<input type='text' name='estadocivil' id='estadocivil' value='".$row['estadocivil']."'><br>";
  	echo "<input type='date' name='fecha' id='fecha' value='".$row['fecha']."'><br>";
    echo "<input type='text' name='expedicion' id='expedicion' value='".$row['expedicion']."'><br>";
    echo "<input type='text' name='lugar' id='lugar' value='".$row['lugar']."'><br>";
    echo "<input type='text' name='direccion' id='direccion' value='".$row['direccion']."'><br>";
    echo "<input type='text' name='barrio' id='barrio' value='".$row['barrio']."'><br>";
    echo "<input type='text' name='eps' id='eps' value='".$row['eps']."'><br>";
    echo "<input type='text' name='rh' id='rh' value='".$row['rh']."'><br>";
    echo "<input type='text' name='profesion' id='profesion' value='".$row['profesion']."'><br>";
  	echo "<input type='number' name='telefono' id='telefono' value='".$row['telefono']."'><br>";
  	echo "<input type='email' name='correo' id='correo' value='".$row['correo']."'><br>";
  }
 ?>
 <input type='hidden' name='documento' id='documento' value='<?php echo $id;?>'>
 <input type="submit" value="Actualizar">
</form>
</body>
</html>
