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
    $consulta = $conexion->query("Select * from cliente");
    if (empty($_POST)) {
        ?>
        <div class="container">
            <h1 class="text-center mb-5">Consulta Cliente</h1>
            <form action="" method="POST">
                <div>
                    <label for="">Consultar</label>
                    <input type="text" placeholder="Ingrece el proveedor" name="buscar">
                    <button type="submit">Consultar</button>
                </div>
            </form>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Elimminar</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php
                    while ($row=$consulta->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $row ['nombre'];?></td>
                            <td><?php echo $row ['documento'];?></td>
                            <td>
                                <a class="btn btn-outline-info mt-2" href="modificarCliente.php? 
                                    nombre=<?php echo $row['nombre'] ?> &&
                                    documento=<?php echo $row['documento'] ?>">
                                    <i class="icon-edit">Editar</i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-outline-danger mt-2" href="eliminarCliente.php? 
                                    eliminarNombre=<?php echo $row['nombre'] ?>">
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
                <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Facturacion/menu.php" role="button">Menu</a>
            </div>
        </div>
        <?php
    }else if (isset($_POST['buscar'])) {
        if (isset($_POST['buscar'])) {
            $buscar = $_POST['buscar'];
            $consulta = $conexion->query("SELECT * FROM cliente WHERE nombre LIKE '%$buscar%' or documento='$buscar' ORDER BY id ASC");
        }else {
            $consulta = $conexion->query("SELECT * FROM cliente ORDER BY nombre");
        }
        ?>
        <div class="container">
            <h1 class="text-center">Consulta Individula</h1>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Elimminar</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php
                    while ($row=$consulta->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $row ['nombre'];?></td>
                            <td><?php echo $row ['documento'];?></td>
                            <td>
                                <a class="btn btn-outline-info mt-2" href="modificarCliente.php? 
                                    nombre=<?php echo $row['nombre'] ?> &&
                                    documento=<?php echo $row['documento'] ?>">
                                    <i class="icon-edit">Editar</i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-outline-danger mt-2" href="eliminarCliente.php? 
                                    eliminarNombre=<?php echo $row['nombre'] ?>">
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