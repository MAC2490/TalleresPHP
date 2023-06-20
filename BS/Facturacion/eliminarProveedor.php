<?php
    include_once("conexion.php");

    $nombre = $_GET['eliminarNombre'];
    
    $conexion->query("DELETE FROM proveedor WHERE nombre='$nombre'");

    header ("Location: consultaProveedor.php");
?>