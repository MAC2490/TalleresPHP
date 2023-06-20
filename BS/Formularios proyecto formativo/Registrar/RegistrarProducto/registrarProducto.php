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
    <form action="guardarProducto.php">
        <div class="container">
            <form class="row g-3">
                <h1 class="text-center">Registrar Producto</h1>
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion del producto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" ></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="inputEmail4" name="precio">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Caducidad</label>
                            <input type="text" class="form-control" id="inputPassword4" name="caducidad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="">Tipo de producto</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" value="vegetales" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Vegetales
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" value="frutas" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                Frutas
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Cantidad del producto en KL</label>
                            <input type="number" class="form-control" id="inputPassword4" name="cantidad">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Terminar Registro</button>
                </div>
            </form>
        </div>
    </form>
    <div class="text-center">
        <a class="btn btn-outline-info mt-2" href="http://localhost/ADSO-2593917/BS/Formularios%20proyecto%20formativo/Registrar/MenuRegistrar.php" role="button">Menu Principal</a>
    </div>
</body>
</html>