<?php
  include("conexion.php");
  $documento=$_POST["documento"];
  $password=$_POST["password"];
  $nombre=$_POST["nombre"];
  $apellidos=$_POST["apellidos"];
  $sexo=$_POST["sexo"];
  $estadocivil=$_POST["estadocivil"];
  $fecha=$_POST["fecha"];
  $expedicion=$_POST["expedicion"];
  $lugar=$_POST["lugar"];
  $direccion=$_POST["direccion"];
  $barrio=$_POST["barrio"];
  $eps=$_POST["eps"];
  $rh=$_POST["rh"];
  $profesion=$_POST["profesion"];
  $telefono=$_POST["telefono"];
  $correo=$_POST["correo"];
//Guardamos a la tabla
  mysqli_query($conexion,"insert into acudiente(documento,password,nombre,apellidos,sexo,estadocivil,fecha,expedicion,lugar,direccion,barrio,eps,rh,profesion,telefono,correo) values ($documento,'$password','$nombre','$apellidos','$sexo','$estadocivil','$fecha','$expedicion','$lugar','$direccion','$barrio','$eps','$rh','$profesion','$telefono','$correo')") or die("Problemas al insertar".mysqli_error($conexion));
  echo " Se guardaron los cambios ";
    header("location:mostrardatosacudiente.php");
?>
