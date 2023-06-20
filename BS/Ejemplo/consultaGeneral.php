<?php
    include_once("conexion.php");

    $nombre=$_REQUEST['nombre'];

    $consulta = $conexion->query("Select *  from usuario where nombre='$nombre'");

    while ($row=$consulta->fetch_array()) {
        echo 'Nombre:', $row['nombre'].'<br>';
        echo 'Apellido:', $row['apellido'].'<br>';
        echo 'Email:', $row['email'].'<br>';
    }
?>