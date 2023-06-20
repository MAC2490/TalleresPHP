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
        include_once ("conexion.php");
        $cantidadPago = $_REQUEST['cantida_pago'];
        $totalPagar = $_REQUEST['total'];
        $nombreComprador = $_REQUEST['nombre_comprador'];
        $producto = $_REQUEST['producto'];
        $cantidad = $_REQUEST['cantidad'];
        $precio = $_REQUEST['precio'];

        $guardar = false;

    ?>
    <div class="container">
        <!-- Imprimir factura -->
        <div>
            <?php
                if ($cantidadPago<$totalPagar OR $nombreComprador == null) {
                    $guardar = true;
                    ?>
                    <div class="container">
                        <div class="alert alert-success d-flex align-items-center container" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                <?php
                                    if ($nombreComprador == null AND $cantidadPago<$totalPagar) {
                                        ?>
                                            EL NOMBRE DEL COMPRADOR NO ES VALIDO O EL VALOR CON EL QUE DESEA PAGAR ES INSUFICIENTE 
                                        <?php
                                    }else if ($cantidadPago<$totalPagar){
                                        ?>
                                            EL VALOR CON EL QUE DESEA PAGAR ES INSUFICIENTE
                                        <?php
                                    }else{
                                        ?>  
                                            EL NOMBRE DEL COMPRADOR NO ES VALIDO
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Salir</a>
                        </div>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-success d-flex align-items-center container" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                            Se registro con exito
                        </div>
                    </div>
                    <h1>Factura</h1>
                    <div class="container">
                        <h1 class="text-center mb-5">Cancelo</h1>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nombre del comprador</label>
                            <div class="col-sm-10">
                                <label for=""><?php echo $nombreComprador;?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Documento del comprador</label>
                            <div class="col-sm-10">
                                <?php
                                    $consulta = $conexion->query("SELECT * FROM cliente");
                                    while ($row=$consulta->fetch_array()) {
                                        if ($row['nombre']==$nombreComprador) {
                                            ?>
                                                <label for=""><?php echo $row['documento']; ?></label>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Producto</label>
                            <div class="col-sm-10">
                                <label for=""><?php echo $producto;?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Cantidad a vender</label>
                            <div class="col-sm-10">
                                <label for=""><?php echo $cantidad;?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                                <label for=""><?php echo $precio;?></label>
                            </div>
                        </div>
                        <div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <label for=""><?php echo $totalPagar;?></label> 
                                </div>
                            </div> 
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Pago con</label>
                            <div class="col-sm-10">
                                <label for=""><?php echo $cantidadPago;?></label>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Valor devueto</label>
                            <div class="col-sm-10">
                                <label for=""><?php $valorDvuelto = $cantidadPago-$totalPagar; echo $valorDvuelto;?></label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Salir</a>
                    </div>
                    <?php
                }
                if ($guardar == false) {
                    $conexion->query("insert into compra(producto,cantidad,precio,total,nombre_comprador,cantidad_pago,estado,hora,mes) values ('$_REQUEST[producto]',$_REQUEST[cantidad],$_REQUEST[precio],$_REQUEST[total],'$_REQUEST[nombre_comprador]',$_REQUEST[cantida_pago],'Activo','$_REQUEST[fecha]','$_REQUEST[fecha]')");   
                }
            ?>
        </div>
    </div>
</body>
</html>