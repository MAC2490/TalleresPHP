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
    <form action="terminarRegistro.php">
        <div class="container">
            <h1 class="mb-5 text-center">Registrar Agricultor</h1>
            <form class="row g-3">
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Agricultor</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="direccion">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="inputEmail4" name="telefono">
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="inputPassword4" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="inputPassword4" name="email">
                        </div>
                    </div>
                    <select class="form-select mb-4" aria-label="Default select example" name="metodo_pago">
                        <option selected>Metodos de Pago</option>
                        <option value="Bancolombia">Bancolombia</option>
                        <option value="Caja Social">Caja Social</option>
                        <option value="Colmena BCSC">Colmena BCSC</option>
                        <option value="BBVA">BBVA</option>
                    </select>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-info ">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </form>
    <div class="text-center">
        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Registrar/MenuRegistrar.php" role="button">Menu Principal</a>
    </div>
</body>
</html>