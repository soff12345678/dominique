<?php
  include("conexion.php");
  $documento=$_POST["documento"];
  $nombre=$_POST["nombre"];
  $nombre_img=$_FILES['firma']['name'];
  $tipo_img=$_FILES['firma']['type'];
  $tam_img=$_FILES['firma']['size'];
   if ($tam_img<=1000000) {
   	if ($tipo_img=="image/jpg" || $tipo_img=="image/jpeg" || $tipo_img=="image/png" || $tipo_img=="image/gif") {
   		$carpeta=$_SERVER['DOCUMENT_ROOT'].'/Proyecto de grado/imagenes/';
   		move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta.$nombre_img);
//Guardamos a la tabla
  mysqli_query($conexion,"insert into rector(documento,nombre,firma) values ('$documento','$nombre','$nombre_img')") or die("Problemas al insertar".mysqli_error($conexion));
  header("location:index.html");
}
}
?>