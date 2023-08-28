<?php
  include("conexion.php");
  $documento=$_POST["documento"];
  $password=$_POST["password"];
  $nombre=$_POST["nombre"];
  $apellidos=$_POST["apellidos"];
  $sexo=$_POST["sexo"];
  $fecha=$_POST["fecha"];
  $expedicion=$_POST["expedicion"];
  $lugar=$_POST["lugar"];
  $direccion=$_POST["direccion"];
  $barrio=$_POST["barrio"];
  $eps=$_POST["eps"];
  $rh=$_POST["rh"];
  $acudiente=$_POST["acudiente"];

//Guardamos a la tabla
  mysqli_query($conexion,"insert into estudiante(documento,password,nombre,apellidos,sexo,fecha,expedicion,lugar,direccion,barrio,eps,rh,acudiente) values ($documento,'$password','$nombre','$apellidos','$sexo','$fecha','$expedicion','$lugar','$direccion','$barrio','$eps','$rh',$acudiente)") or die("Problemas al insertar".mysqli_error($conexion));
  echo " Se guardaron los cambios ";
  header("location:configestudiantes.php");
?>

