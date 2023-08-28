<?php
include('conexion.php');
$id=$_GET["ced"];
mysqli_query($conexion, "DELETE from docente where documento=$id") or die ("problemas en el select". mysqli_error ($conexion));
header("location:mostrardatosdocente.php");
?>