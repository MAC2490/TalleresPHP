<?php
    include_once("conexion.php");

    $nombre = $_GET['eliminarNombre'];
    
    $conexion->query("DELETE FROM cliente WHERE nombre='$nombre'");

    header ("Location: consultarClientes.php");
?>