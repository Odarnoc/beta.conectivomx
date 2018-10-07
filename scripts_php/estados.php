<?php

$conexion = mysqli_connect("localhost","u607231300_conec","HFzEVyQT162Q","u607231300_mex");
$conexion->query("SET NAMES 'utf8'");
$query = $conexion->query("SELECT * FROM estados");

echo '<option value="0">Estado</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['nombre'] . '</option>' . "\n";
}
