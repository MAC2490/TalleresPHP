<?php
    include_once("conexion.php");

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    $precio = $_POST['precio'];
    $cantidad_inventario = $_POST['cantidad_inventario'];

    $conexion->query("UPDATE producto SET descripcion='$descripcion',costo='$costo', precio='$precio', cantida_inventario='$cantidad_inventario' WHERE nombre='$nombre'");

    header ("Location: consultarProducto.php");
?>