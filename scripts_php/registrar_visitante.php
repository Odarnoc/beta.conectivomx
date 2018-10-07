<?php
	include_once("conexion.php");
	$nombre = mysqli_real_escape_string($conexion, $_POST['nombreM']);

	$email = mysqli_real_escape_string($conexion, $_POST['correoM']);
    $estado = mysqli_real_escape_string($conexion, $_POST['estadosM']);
    $municipio = mysqli_real_escape_string($conexion, $_POST['municipiosM']);
	$novedades = mysqli_real_escape_string($conexion, $_POST['novedades']);
    $result_cursos = "INSERT INTO visitantes (nombre, email, estado, municipio,novedades) VALUES ('$nombre', '$email', $estado, $municipio, $novedades)";
    $resultado_cursos = mysqli_query($conexion, $result_cursos);
    $conexion->close();
    echo "<script>window.location='../index.php?m=1';</script>";
    
?>