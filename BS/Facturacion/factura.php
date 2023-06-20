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
        if (empty($_REQUEST)) {
    ?>  
    <form method="POST">
        <div class="container">
        <h1 class="text-center mb-5">Ingresar Producto</h1>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Producto a vender</label>
            <div class="col-sm-5">
                <select name="seleccionar_pro" id="">
                    <option value="">Seleccionar</option>
                    <?php
                        while ($row=$consulta->fetch_array()) {
                            ?>
                                <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="text-center">
            <button name="aceptar" type="submit" class="btn btn-secondary">Aceptar</button>
        </div>
    </form> 
    <div class="container">
        <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/menu.php" role="button">Menu</a>
    </div>
    <?php
        }else if(isset($_REQUEST['aceptar'])) {
            ?>
                <form method="POST"> 
                    <?php
                        $producto = $_REQUEST['seleccionar_pro'];
                    ?>
                    <div class="container">
                        <h1 class="text-center mb-5">Facturaracion</h1>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Producto</label>
                            <div class="col-sm-10">
                                <input readonly type="text" class="col-sm-2 col-form-label" name="producto" value="<?php echo $producto; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Cantidad a vender</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" aria-label="default input example" name="cantidad">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                                <?php
                                    include_once ("conexion.php");
                                    $consulta = $conexion->query("Select * from producto where nombre='$producto'");
                                    while ($row=$consulta->fetch_array()) {
                                        ?>
                                            <input readonly type="text" name="precio" value="<?php echo $row['precio']; ?>">
                                        <?php
                                    }
                                ?> 
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-secondary">Calcular</button>
                        </div> 
                    </div>
                </form>
                <div class="container">
                    <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Menu</a>
                </div>
            <?php
            
        }else if (isset($_REQUEST['cantidad'])) {
            $producto = $_REQUEST['producto'];
            $cantida = $_REQUEST['cantidad'];
            $precio = $_REQUEST['precio'];
            $terminar = true;
            include_once ("conexion.php");
            $consulta = $conexion->query("Select * from producto");
            while ($row=$consulta->fetch_array()) {
                if ($row['nombre']==$producto) {
                    if ($cantida>$row['cantida_inventario']) {
                        $terminar = false;
                    }
                }
            }
            if ($terminar == true) {
                ?>
                <form action="guardarFactura.php">
                    <div class="container">
                        <h1 class="text-center mb-5">Cancelacion</h1>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nombre del comprador</label>
                            <div class="col-sm-10">
                                <select name="nombre_comprador" id="">
                                    <option value="">Seleccionar</option>
                                    <?php
                                    include_once("conexion.php");
                                    $consulta = $conexion->query("Select * from cliente");
                                    while ($row=$consulta->fetch_array()) {
                                        ?>
                                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Producto</label>
                            <div class="col-sm-10">
                                <input readonly type="text" name="producto" value="<?php echo $producto; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Cantidad a vender</label>
                            <div class="col-sm-10">
                                <input readonly type="text" name="cantidad" value="<?php echo $cantida; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                                <input readonly type="text" name="precio" value="<?php echo $precio; ?>">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <?php
                                    $total = $cantida*$precio; 
                                    ?>
                                    <input readonly type="text" name="total" value="<?php echo $total; ?>"> 
                                </div>
                            </div> 
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Paga con</label>
                            <div class="col-sm-10">
                                <input type="text" name="cantida_pago">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button name="compra" type="submit" class="btn btn-secondary">comprar</button>
                    </div> 
                    <?php
                    date_default_timezone_set('America/Bogota');
                    $fechaActual = date("Y-m-d H:i:s");  
                    echo $fechaActual; 
                    ?>
                    <input name="fecha" type="text" style="display: none" value="<?php echo $fechaActual ?>">
                
                </form>
                <div class="container">
                    <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Cancelar</a>
                </div>
                <?php    
            }else{
                ?>
                <div class="container">
                    <div class="alert alert-success d-flex align-items-center container" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            Error
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Salir</a>
                    </div>
                </div>
                <?php
            }
        }
    ?>
</body>
</html>