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
        $nombre=($_GET['nombre']);
        $descripcion=($_GET['descripcion']);
        $costo=($_GET['costo']);
        $precio=($_GET['precio']);
        $cantidad_inventario=($_GET['cantidad_inventario']);
    ?>
    <div class="container">
        <form action="editarProducto.php" method="POST">
            <h1 class="text-center">Editar</h1>
            <table class="table table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>Cantidad inventario</th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
                    <td><input type="text" name="descripcion" value="<?php echo $descripcion;?>"></td>
                    <td><input type="text" name="costo" value="<?php echo $costo;?>"></td>
                    <td><input type="text" name="precio" value="<?php echo $precio;?>"></td>
                    <td><input type="text" name="cantidad_inventario" value="<?php echo $cantidad_inventario;?>"></td>
                </tr>
            </table>
            <div class="text-center">
                <button class="btn btn-outline-info mt-2" type="submit">Editar</button>
            </div>
        </form>
        <div class="text-center">
            <a href="http://localhost/ADSO-2593917/BS/Facturacion/consultarProducto.php"><button class="btn btn-outline-info mt-2">Cancelar</button></a>
        </div>
    </div>
</body>
</html>