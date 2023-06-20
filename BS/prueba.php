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
    ?>
    <form action="" method="POST">
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
                    <button class="ms-3 btn btn-primary" name="calcular">Mostrar precio</button>
                </div>
            </div>
            <?php
            if (isset($_REQUEST['calcular'])) {
                ?>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <select name="precio_seleccionado" id="">
                        <?php
                            if (isset($_REQUEST['seleccionar_pro'])) {
                                $producto = $_REQUEST['seleccionar_pro'];
                                $consulta = $conexion->query("Select * from producto");
                                while ($row=$consulta->fetch_array()) {
                                    if ($producto == $row['nombre']) {
                                        ?>
                                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>
                                        <?php
                                        break;
                                    }
                                }
                            }
                        ?>
                    </select>  
                </div>
            </div>  
            <?php    
            }
            ?>
            <div class="text-center">
                <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/factura.php" role="button">Aceptar</a>
            </div>
        </div>
    </form>  
    <div class="container">
        <a class="btn btn-secondary" href="http://localhost/ADSO-2593917/BS/Facturacion/menu.php" role="button">Menu</a>
    </div>
</body>
</html>