<?php
    include_once("conexion.php");

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $producto = $_POST['producto'];
    
    $conexion->query("UPDATE proveedor set direccion='$direccion', telefono='$telefono',producto='$producto' WHERE nombre='$nombre'");

    header ("Location: consultaProveedor.php");
?>