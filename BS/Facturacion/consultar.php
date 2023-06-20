<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    include_once("conexion.php");
    $consulta = $conexion->query("Select * from compra");
    if (empty($_POST)) {
        ?>
        <div class="container">
            <h1 class="text-center mb-5">Consulta ventas</h1>
            <div id="todo" class="d-flex">
                <form action="" method="POST">
                    <div>
                        <label for="">Consultar</label>
                        <input type="text" placeholder="Ingrece el producto" name="buscar">
                        <button type="submit" class="btn btn-outline-info mt-2 boton">Consultar</button>
                    </div>
                </form>
                <form action="BuscarPorFecha.php" method="POST">
                    <div id="select">
                        <label for="">Fechas</label>
                        <select name="fecha" id="">
                        <option></option>
                            <?php
                                $cambiarFecha = "";
                                $consultar2 = $conexion->query("Select * from compra");
                                while ($row=$consultar2->fetch_array()) {
                                    if ($cambiarFecha != $row['mes']) {
                                        ?>
                                        <option value="<?php echo $row['mes']; ?>"><?php echo $row['mes']; ?></option>
                                        <?php   
                                    }
                                    $cambiarFecha = $row['mes'];
                                }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-outline-info mt-2 boton">Buscar</button>
                    </div>
                </form>
            </div>
            <form action="editarVentas.php">
                <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Total</th>
                        <th scope="con">Nombre</th>
                        <th scope="con">Cantidad Pago</th>
                        <th scope="con">Fecha</th>
                        <th scope="con">Estado</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php
                    $contEstado = 0;
                    $contLista = 0;
                    $contCantidad = 0;
                    $contTotal = 0;
                    $guardarTotal = 0;
                    $restarCantidad = 0;
                    $refrescarPagina = 2;
                    $consultar1 = $conexion->query("Select * from compra");
                    while ($row=$consultar1->fetch_array()) {
                        $contCantidad = $contCantidad+$row['cantidad'];
                        $contTotal = $contTotal+$row['total'];
                        $guardarTotal = $row['cantidad_total'];
                        if ($row['estado']=='Anulado') {
                            $restarCantidad = $restarCantidad+$row['cantidad'];
                            $contEstado++;
                        }
                        $contLista++;
                    }
                    $contCantidad = $contCantidad - $restarCantidad;
                    while ($row=$consulta->fetch_array()) {
                        if ($row['estado'] == 'Activo') {
                            ?>
                                <tr>
                                    <td><?php echo $row ['id'];?></td>
                                    <td><?php echo $row ['producto'];?></td>
                                    <td><?php echo $row ['cantidad'];?></td>
                                    <td><?php echo $row ['precio'];?></td>
                                    <td><?php echo $row ['total'];?></td>
                                    <td><?php echo $row ['nombre_comprador'];?></td>
                                    <td><?php echo $row ['cantidad_pago'];?></td>
                                    <td><?php echo $row ['hora']; echo $row['mes']?></td>
                                    <td>
                                        <a class="btn btn-outline-info mt-2" href="modificarVentas.php? 
                                            estado=<?php echo $row['estado'] ?> &
                                            id=<?php echo $row['id'] ?> &
                                            totalPrecio=<?php echo $row['total'] ?> &
                                            cantidad_total=<?php 
                                                if ($contEstado != $contLista) {
                                                    if ($guardarTotal == 0) {
                                                        echo $contTotal;
                                                    }else{
                                                        echo $guardarTotal;
                                                    }
                                                }
                                                ?> &
                                                refrescarPagina=<?php echo $refrescarPagina ?>">
                                            <i class="icon-edit"><?php echo $row ['estado'];?></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                        }else{
                            ?>
                            <tr class="table-dark">
                                <td><?php echo $row ['id'];?></td>
                                <td><?php echo $row ['producto'];?></td>
                                <td><?php echo $row ['cantidad'];?></td>
                                <td><?php echo $row ['precio'];?></td>
                                <td><?php echo $row ['total'];?></td>
                                <td><?php echo $row ['nombre_comprador'];?></td>
                                <td><?php echo $row ['cantidad_pago'];?></td>
                                <td><?php echo $row ['hora']; echo $row['mes']?></td>
                                <td>
                                    <a class="btn btn-outline-info mt-2" href="modificarVentas.php? 
                                        estado=<?php echo $row['estado'] ?> &
                                        id=<?php echo $row['id'] ?> &
                                        refrescarPagina<?php echo $refrescarPagina ?> &
                                        totalPrecio=<?php echo $row['total'] ?> &
                                        cantidad_total=<?php 
                                            if ($contEstado != $contLista) {
                                                if ($guardarTotal == 0) {
                                                    echo $contTotal;
                                                }else{
                                                    echo $guardarTotal;
                                                }
                                            }
                                            ?> &
                                            refrescarPagina=<?php echo $refrescarPagina ?>">
                                        <i class="icon-edit"><?php echo $row ['estado'];?></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td><?php echo $contCantidad; ?></td>
                        <td></td>
                        <td><?php 
                            if ($guardarTotal == 0) {
                                if ($contEstado != $contLista) {
                                    echo $contTotal;   
                                }else{
                                    echo "000";
                                }
                            }else{
                                if ($guardarTotal == 1) {
                                    echo "000";
                                }else{
                                    echo $guardarTotal;
                                }
                            }
                        ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
        if ($contEstado != $contLista) {
            if ($guardarTotal == 0) {
                $conexion -> query("UPDATE compra SET cantidad_total='$contTotal'");
            }else{
                if ($guardarTotal == 1) {
                    $guardarTotal = 0;
                }
                $conexion -> query("UPDATE compra SET cantidad_total='$guardarTotal'");
            }
        }
    }else if (isset($_POST['buscar'])) {
        if (isset($_POST['buscar'])) {
            $buscar = $_POST['buscar'];
            $consulta = $conexion->query("SELECT * FROM compra WHERE producto LIKE '%$buscar%' or id='$buscar' ORDER BY id ASC");
            $consultar1 = $conexion->query("SELECT * FROM compra WHERE producto LIKE '%$buscar%' or id='$buscar' ORDER BY id ASC");
        }else {
            $consulta = $conexion->query("SELECT * FROM compra ORDER BY producto");
            $consultar1 = $conexion->query("SELECT * FROM compra ORDER BY producto");
        }
        ?>
        <div class="container">
            <h1 class="text-center">Consulta Individula</h1>
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Total</th>
                        <th scope="con">Nombre</th>
                        <th scope="con">Cantidad Pago</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>    
                    <?php
                    $contEstado = 0;
                    $contLista = 0;
                    $contCantidad = 0;
                    $contTotal = 0;
                    $guardarTotal = 0;
                    $restarTotal = 0;
                    $restarCantidad = 0;
                    while ($row=$consultar1->fetch_array()) {
                        $contCantidad = $contCantidad+$row['cantidad'];
                        $contTotal = $contTotal+$row['total'];
                        if ($row['estado']=='Anulado') {
                            $restarCantidad = $restarCantidad+$row['cantidad'];
                            $restarTotal = $restarTotal+$row['total']; 
                            $contEstado++;
                        }
                        $guardarTotal = $row['cantidad_total'];
                        $contLista++;
                    }
                    $contCantidad = $contCantidad - $restarCantidad;
                    $contTotal = $contTotal - $restarTotal;
                    while ($row=$consulta->fetch_array()) {
                        if ($row['estado']=='Activo') {     
                    ?>
                        <tr>
                            <td><?php echo $row ['id'];?></td>
                            <td><?php echo $row ['producto'];?></td>
                            <td><?php echo $row ['cantidad'];?></td>
                            <td><?php echo $row ['precio'];?></td>
                            <td><?php echo $row ['total'];?></td>
                            <td><?php echo $row ['nombre_comprador'];?></td>
                            <td><?php echo $row ['cantidad_pago'];?></td>
                            <td><?php echo $row ['hora']; echo $row['mes']?></td>
                            <td>
                                <a class="btn btn-outline-info mt-2" href="modificarVentas.php? 
                                    estado=<?php echo $row['estado'] ?> &
                                    id=<?php echo $row['id'] ?> &
                                    totalPrecio=<?php echo $row['total'] ?> &
                                    cantidad_total=<?php 
                                        if ($contEstado != $contLista) {
                                            if ($guardarTotal == 0) {
                                                echo $contTotal;
                                            }else{
                                                echo $guardarTotal;
                                            }
                                        }
                                        ?>">
                                    <i class="icon-edit"><?php echo $row ['estado'];?></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }else{
                            ?>
                            <tr class="table-dark">
                                <td><?php echo $row ['id'];?></td>
                                <td><?php echo $row ['producto'];?></td>
                                <td><?php echo $row ['cantidad'];?></td>
                                <td><?php echo $row ['precio'];?></td>
                                <td><?php echo $row ['total'];?></td>
                                <td><?php echo $row ['nombre_comprador'];?></td>
                                <td><?php echo $row ['cantidad_pago'];?></td>
                                <td><?php echo $row ['hora']; echo $row['mes']?></td>
                                <td>
                                    <a class="btn btn-outline-info mt-2" href="modificarVentas.php? 
                                        estado=<?php echo $row['estado'] ?> &
                                        id=<?php echo $row['id'] ?> &
                                        totalPrecio=<?php echo $row['total'] ?> &
                                        cantidad_total=<?php 
                                            if ($contEstado != $contLista) {
                                                if ($guardarTotal == 0) {
                                                    echo $contTotal;
                                                }else{
                                                    echo $guardarTotal;
                                                }
                                            }
                                            ?>">
                                        <i class="icon-edit"><?php echo $row ['estado'];?></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td><?php echo $contCantidad; ?></td>
                        <td></td>
                        <td><?php 
                            if ($contEstado != $contLista) {
                                echo $contTotal;   
                            }else{
                                echo "000";
                            }
                        ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
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