<?php
include('conexion.php');
$id=$_GET["cod"];
$result=mysqli_query($conexion,"select * from acudiente where documento=$id") or die ("problemas en el select". mysqli_error(  $conexion));
While ($row=mysqli_fetch_array($result)){
	echo "";
	$nombre=$row['nombre'];

}


echo"esta seguro que desea eliminar el registro " .$id. " con nombre " .$nombre;


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <a href="confirmaeliminaracudiente.php?ced=<?php echo $_GET['cod'];?>"><br> SI ELIMINAR</a><br>
 <a href="mostrardatosacudiente.php">NO ELIMINAR </a>
</body>
</html>
