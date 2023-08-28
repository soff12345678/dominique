<?php

require 'conexion.php';

$columns = ['documento', 'password', 'nombre', 'apellidos', 'sexo', 'fecha','expedicion', 'lugar', 'direccion', 'barrio', 'eps', 'rh', 'grado', 'acudiente'];
$table = "estudiante";

$campo =isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null){
    $where = "WHERE (";

    $cont = count($columns);
    for($i = 0; $i < $cont; $i++){
        $where .= $columns[$i]  . " LIKE '%" . $campo . "%' OR ";

    }
    $where = substr_replace($where, "", -3);
    $where .= ")";

}


$sql = "SELECT " .implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html = '';


if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td><center>'.$row['documento'] . '</center></td>';
        $html .= '<td><center>'.$row['password'] . '</center></td>';
        $html .= '<td><center>'.$row['nombre'] .'</center></td>';
        $html .= '<td><center>'.$row['apellidos'] . '</center></td>';
        $html .= '<td><center>'.$row['sexo'] . '</center></td>';
        $html .= '<td><center>'.$row['fecha'] . '</center></td>';
        $html .= '<td><center>'.$row['expedicion'] . '</center></td>';
        $html .= '<td><center>'.$row['lugar'] . '</center></td>';
        $html .= '<td><center>'.$row['direccion'] . '</center></td>';
        $html .= '<td><center>'.$row['barrio'] . '</center></td>';
        $html .= '<td><center>'.$row['eps'] . '</center></td>';
        $html .= '<td><center>'.$row['rh'] . '</center></td>';
        $html .= '<td><center>'.$row['grado'] . '</center></td>';
        $html .= '<td><center>'.$row['acudiente'] . '</center></td>';
        $html .= "<td><a href='eliminarestudiante.php?cod=$row[documento]'>Eliminar</td>";
        $html .= "<td><a href='modificarestudiante.php?doc=$row[documento]'>Modificar</td>";
        $html .= '</tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="15">Sin resultados</td>';
    $html .= '</tr>';
}
echo json_encode($html, JSON_UNESCAPED_UNICODE);



?>