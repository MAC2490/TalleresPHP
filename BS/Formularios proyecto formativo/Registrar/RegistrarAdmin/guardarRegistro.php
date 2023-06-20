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
        include_once("conexion.php");
        $conexion->query("insert into guardarRegistro(nombre,apellido,documento,telefono,email,contrasena) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[documento]','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[contrasena]') ");
    ?>
    <div class="container">
        <div class="alert alert-success d-flex align-items-center container" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                Se registro con exito
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Registrar/RegistrarAdmin/registrarAdmin.php" role="button">Salir</a>
        </div>
    </div>
</body>
</html>