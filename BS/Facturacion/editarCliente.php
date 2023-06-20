<?php
    include_once("conexion.php");

    $nombre = $_POST['nombre'];
    $documento=$_POST['documento'];

    

    $conexion->query("UPDATE cliente set documento='$documento' WHERE nombre='$nombre'");

    header ("Location: consultarClientes.php");
?>