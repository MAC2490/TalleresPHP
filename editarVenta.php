<?php
    include_once("conexion4.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $estado = $_GET['estado'];
        $nuevoEstado = "";
        echo $estado;
        if($estado == "activo"){
            $nuevoEstado = "anulado";
        }else{
            $nuevoEstado = "activo";
        }
        $conexion4 -> query("UPDATE ventas SET estado='$nuevoEstado' WHERE id_venta='$id'");

        header("Location: registroVentas.php");
    ?>
</body>
</html>