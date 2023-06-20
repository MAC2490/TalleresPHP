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
    <form action="guardarRegistro.php">
        <form class="row g-3">
            <div class="container">
                <h1 class="text-center">Regsitrar Administrador</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputPassword4" name="apellido">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Documento</label>
                        <input type="number" class="form-control" id="inputPassword4" name="documento">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="inputPassword4" name="telefono">
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="inputPassword4" name="direccion">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="inputPassword4" name="edad">
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword4" name="contrasena">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-info mt-4">Terminar Registro</button>
                </div>
            </div>
        </form>
    </form>
    <div class="text-center">
        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Registrar/MenuRegistrar.php" role="button">Menu Principal</a>
    </div>
</body>
</html>