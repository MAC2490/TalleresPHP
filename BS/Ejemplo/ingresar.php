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
    
    <form action="insertar_bd.php">
        <div class="container">
            <div class="container">
                <h1>Formulario</h1>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Apelldio</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="direccion">
                    </div>
                </form>
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">contraseña:</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="contrasena">
                    </div>
                </div>
                <br>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault1" value="hombre">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Hombre
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault2" value="mujer">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Mujer
                    </label>
                </div>
                <select class="form-select" aria-label="Default select example" name="estrato">
                    <option selected>estrato socioeconomico</option>
                    <option value="uno"></option>
                    <option value="dos">2</option>
                    <option value="tres">3</option>
                    <option value="cuatro">4</option>
                    <option value="cinco">5</option>
                </select>
                <br>
                <input type="submit" value="Registrar">
            </div>
        </div>
    </form>
</body>
</html>