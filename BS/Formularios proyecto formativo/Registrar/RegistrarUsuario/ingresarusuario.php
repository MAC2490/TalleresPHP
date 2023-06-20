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
    <form action="completarregistrousuario.php">
        <div class="container">
            <div class="container">
                <h1>Registrar Usuario</h1>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="nombre">
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="email">
                    <label for="floatingInput">Correo Electronico</label>
                </div>
                <div class="btn-group-vertical">
                    <button class="btn btn-outline-info" type="submit" value="Registrarce">Registrar</button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center">
        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Registrar/MenuRegistrar.php" role="button">Menu Principal</a>
    </div>
</body>
</html>