<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include_once("conexion.php");
        $consulta = $conexion->query("Select * from registrarproducto");
        if (empty($_POST)) {
            ?>
            <div class="container">
                <h1 class="text-center mb-5">Consulta Producto</h1>
                <form action="" method="POST">
                    <div>
                        <label for="">Consultar</label>
                        <input type="text" placeholder="Ingrese el producto" name="buscar">
                        <button type="submit">Consultar</button>
                    </div>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Caducidad</th>
                            <th scope="col">Tipo del Producto</th>
                            <th scope="col">Cantidad del Producto</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php
                        while ($row=$consulta->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $row ['nombre'];?></td>
                            <td><?php echo $row ['descripcion'];?></td>
                            <td><?php echo $row ['precio'];?></td>
                            <td><?php echo $row ['caducidad'];?></td>
                            <td><?php echo $row ['tipo_producto'];?></td>
                            <td><?php echo $row ['cantidad_producto'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Consultar/MenuConsultar.php" role="button">Menu Principal</a>
                </div>
            </div>
            <?php
        }else if (isset($_POST['buscar'])) {
            if (isset(($_POST['buscar']))) {
                $buscar = $_POST['buscar'];	
                $consulta = $conexion->query("SELECT * FROM registrarproducto WHERE nombre LIKE '%$buscar%' or tipo_producto='$buscar' ORDER BY nombre DESC");
            }else{
                $consulta = $conexion->query("SELECT * FROM registrarproducto ORDER BY nombre");
            }
            ?>
                <div class="container">
                    <h1 class="text-center">Consulta Individual</h1>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Caducidad</th>
                            <th scope="col">Tipo del Producto</th>
                            <th scope="col">Cantidad del Producto</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php
                        while ($row=$consulta->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $row ['nombre'];?></td>
                            <td><?php echo $row ['descripcion'];?></td>
                            <td><?php echo $row ['precio'];?></td>
                            <td><?php echo $row ['caducidad'];?></td>
                            <td><?php echo $row ['tipo_producto'];?></td>
                            <td><?php echo $row ['cantidad_producto'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    <div class="text-center">
                        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Consultar/consultarProducto/consultarProducto.php" role="button">Salir</a>
                    </div>
                </div>
            <?php
        }
    ?>
    
</body>
</html>