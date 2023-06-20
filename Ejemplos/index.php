<?php
    
    $documento = $_REQUEST['documento'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edades = $_REQUEST['edad'];
    $correo = $_REQUEST['correo'];
    $genero = $_REQUEST['genero'];
    $ciudad = $_REQUEST['ciudad'];
    $perfil = $_REQUEST['perfil'];

    echo "Documento: ",$documento. '<br>';
    echo "Nombre:",$nombre. '<br>';
    echo "Apellido:",$apellido. '<br>';
    echo "Edad:", $edades. '<br>';
    echo "Correo:", $correo. '<br>';
    echo "Genero:",$genero.'<br>';
    echo "Ciudad:",$ciudad.'<br>';
    echo "Perfil: ",$perfil.'<br>';
?>