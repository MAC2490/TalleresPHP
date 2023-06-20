<?php
    include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $estado = trim($_GET['estado']);
        $totalPrecio = $_REQUEST['totalPrecio'];
        $cantidad_total = $_REQUEST['cantidad_total'];
        $refrescarPagina = $_REQUEST['refrescarPagina'];
        $modificarTotal= 0; 
        $nuevoEstado = "";
        echo $refrescarPagina;
        if ($cantidad_total == 1) {
            $cantidad_total = 0;
        }

        if($estado == "Anulado"){
            $modificarTotal = $cantidad_total + $totalPrecio;
            $nuevoEstado = "Activo";
        }else{
            $modificarTotal = $cantidad_total - $totalPrecio;
            $nuevoEstado = "Anulado";
        }
        
        if ($modificarTotal == 0) {
            $modificarTotal = 1;
        }

        $conexion -> query("UPDATE compra SET estado='$nuevoEstado' WHERE id='$id'");
        $conexion -> query("UPDATE compra SET cantidad_total='$modificarTotal' ");
        
        header("Location: consultar.php");
        // if ($refrescarPagina == 2) {
        //     header("Location: consultar.php");   
        // }else{

        //     header("Location: BuscarPorFecha.php");
        // }
    ?>
    </div>
</body>
</html>