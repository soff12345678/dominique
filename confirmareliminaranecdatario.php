<?php
include('conexion.php');
$id=$_GET["documento estudiante"];
mysqli_query($conexion, "DELETE from anecdatario where documento=$id") or die ("problemas en el select". mysqli_error ($conexion));
header("location:anecdatario.php");
?>