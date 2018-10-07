<?php

$conexion = mysqli_connect("localhost","u607231300_conec","HFzEVyQT162Q","u607231300_mex");

$el_estado = $_POST['estado'];
$conexion->query("SET NAMES 'utf8'");
$query = $conexion->query("SELECT * FROM municipios WHERE estado_id = $el_estado");

echo '<option value="0">Municipio</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['nombre'] . '</option>' . "\n";
}
