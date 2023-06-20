<?php
    include_once("conexion.php");

    $nombre = $_GET['eliminarNombre'];
    
    $conexion->query("DELETE FROM producto WHERE nombre='$nombre'");

    header ("Location: consultarProducto.php");
?>