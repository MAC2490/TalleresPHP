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
    $consulta = $conexion->query("Select * from producto");
    if (empty($_POST)) {
        ?>
        <div class="container">
            <h1 class="text-center mb-5">Consulta Producto</h1>
            <form action="" method="POST">
                <div>
                    <label for="">Consultar</label>
                    <input type="text" placeholder="Ingrece el producto" name="buscar">
                    <button type="submit">Consultar</button>
                </div>
            </form>
            <form action="editarProducto.php">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Costo U</th>
                            <th scope="col">Precio U</th>
                            <th scope="col">Cantidad Inventario</th>
                            <th scope="col">Costo Total</th>
                            <th scope="col">Precio Total</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Elimminar</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php
                        $contPrecio = 0;
                        $contCosto = 0;
                        $contInventario = 0;
                        $contCostoTotal = 0;
                        $contPrecioTotal = 0;
                        while ($row=$consulta->fetch_array()) {
                            $costoTotal = $row['costo'] * $row['cantida_inventario'];
                            $precioTotal = $row['precio'] * $row['cantida_inventario'];
                        ?> 
                            <tr>
                                <td><?php echo $row ['id'];?></td>
                                <td><?php echo $row ['nombre'];?></td>
                                <td><?php echo $row ['descripcion'];?></td>
                                <td><?php echo $row ['costo'];?></td>
                                <td><?php echo $row ['precio'];?></td>
                                <td><?php echo $row ['cantida_inventario'];?></td>
                                <td><?php echo $costoTotal;?></td>
                                <td><?php echo $precioTotal;?></td>
                                <td>
                                    <a class="btn btn-outline-info mt-2" href="modificarProducto.php?
                                        nombre=<?php echo $row['nombre']; ?> &&
                                        descripcion=<?php echo $row['descripcion']; ?> &&
                                        costo=<?php echo $row['costo']; ?> &&
                                        precio=<?php echo $row['precio']; ?> &&
                                        cantidad_inventario=<?php echo $row['cantida_inventario']; ?>">
                                        <i class="icon-edit">Editar</i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger mt-2" href="eliminarProducto.php?
                                        eliminarNombre=<?php echo $row['nombre']; ?>">
                                        <i class="icon-edit">Eliminar</i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        $contPrecio = $contPrecio+$row['precio'];
                        $contCosto = $contCosto+$row['costo'];
                        $contInventario = $contInventario+$row['cantida_inventario'];
                        }
                        $contPrecioTotal = $contPrecio*$contInventario;
                        $contCostoTotal = $contCosto*$contInventario;
                        ?>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $contCosto; ?></td>
                            <td><?php echo $contPrecio; ?></td>
                            <td><?php echo $contInventario; ?></td>
                            <td><?php echo $contCostoTotal; ?></td>
                            <td><?php echo $contPrecioTotal; ?></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="text-center">
                <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Facturacion/menu.php" role="button">Menu</a>
            </div>
        </div>
        <?php
    }else if (isset($_POST['buscar'])) {
        if (isset($_POST['buscar'])) {
            $buscar = $_POST['buscar'];
            $consulta = $conexion->query("SELECT * FROM producto WHERE nombre LIKE '%$buscar%' or id='$buscar' ORDER BY id ASC");
        }else {
            $consulta = $conexion->query("SELECT * FROM producto ORDER BY nombre");
        }
        ?>
        <div class="container">
            <h1 class="text-center">Consulta Individula</h1>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad Inventario</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Elimminar</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php
                    while ($row=$consulta->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $row ['id'];?></td>
                            <td><?php echo $row ['nombre'];?></td>
                            <td><?php echo $row ['descripcion'];?></td>
                            <td><?php echo $row ['costo'];?></td>
                            <td><?php echo $row ['precio'];?></td>
                            <td><?php echo $row ['cantida_inventario'];?></td>
                            <td>
                                    <a class="btn btn-outline-info mt-2" href="modificarProducto.php?
                                        nombre=<?php echo $row['nombre']; ?> &&
                                        descripcion=<?php echo $row['descripcion']; ?> &&
                                        costo=<?php echo $row['costo']; ?> &&
                                        precio=<?php echo $row['precio']; ?> &&
                                        cantidad_inventario=<?php echo $row['cantida_inventario']; ?>">
                                        <i class="icon-edit">Editar</i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger mt-2" href="eliminarProducto.php?
                                        eliminarNombre=<?php echo $row['nombre']; ?>">
                                        <i class="icon-edit">Eliminar</i>
                                    </a>
                                </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center">
                <a class="btn btn-outline-info mt-2" href="" role="button">Salir</a>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>