<?php
    include_once("conexion.php");
    
    $conexion->query("insert into usuario (nombre,apellido,email,direccion,contrasena,genero,estrato) values ('$_REQUEST[nombre]',
    '$_REQUEST[apellido]','$_REQUEST[email]','$_REQUEST[direccion]','$_REQUEST[contrasena]','$_REQUEST[genero]','$_REQUEST[estrato]')");
    echo "Se registro con exito";

?>
