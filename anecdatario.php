<?php
include('conexion.php');
$result=mysqli_query($conexion,"select * from anecdatario;") or die ("problemas en el select".mysqli_error($conexion));



echo "<table border='1'>";
echo"<tr>";
echo "<td>Fecha iniciacion de la ficha</td><td>Nombres completos</td><td>Documento</td><td>Fecha de nacimiento</td><td>Direccion de residencia</td><td>Nombre de la madre</td><td>Cedula</td><td>Contacto</td><td>Nombre del padre</td><td>Cedula</td><td>Contacto</td><td>Otro acudiente</td><td>Parentesco</td><td>Telefono</td><td>Docente</td><td>Grado</td><td>Año</td>";
echo"<tr>";
while($reg=mysqli_fetch_array($result)){
    echo"<tr>";
    echo "<td>".$reg['documento']."</td>";
    echo "<td>".$reg['nombre']."</td>";
    echo "<td>".$reg['apellidos']."</td>";
    echo "<td>".$reg['sexo']."</td>";
    echo "<td>".$reg['estadocivil']."</td>";
    echo "<td>".$reg['fecha']."</td>";
    echo "<td>".$reg['telefono']."</td>";
    echo "<td>".$reg['correo']."</td>";


    echo"<td><a href='eliminaracudiente.php?cod=$reg[documento]'>Eliminar</td>";
    echo"<td><a href='modificaracudiente.php?doc=$reg[documento]'>Modificar</td>";
    echo"<tr>";
}
echo"</table>";
?>