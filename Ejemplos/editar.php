<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$email  = $_POST['email'];
$nota   = $_POST['nota'];

$conexion->query("UPDATE alumnos set nombre='$nombre', email='$email',
nota='$nota' where email='$email'");

header("Location: consulta_alumno.php");

?>