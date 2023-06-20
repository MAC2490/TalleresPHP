<?php
    if (isset($_REQUEST['enviar'])) {
        echo "Nombre" .$_REQUEST['nombre'].'<br>';
        echo "Apellido" .$_REQUEST['apellido'].'<br>';   
    }
?>

<form method="POST">
    <p>NOMBRE: <input type="text" name="nombre"></p>
    <p>APELLIDO: <input type="text" name="apellido"></p>
    <input type="submit" name="enviar" value="Enviar">
</form>