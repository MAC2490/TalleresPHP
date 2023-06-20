<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">

        Documento: <input type="number" name="documento">
        <br>
        Nombre: <input type="text" name="nombre">
        <br>
        Apellido: <input type="text" name="apellido">
        <br>
        Edad: <input type="number" name="edad">
        <br>
        Correo: <input type="text" name="correo">
        <br>
        Genero: Masculino<input type="radio" name="genero" value="masculino">
        Fememnino <input type="radio" name="genero" value="femenino">
        <br>
        Ciudad:
        <select name="ciudad">
            <option value=""></option>
            <option value="Pereira" >Pereira</option>
            <option value="Armenia" >Armenia</option>
            <option value="Manizales">Manizales</option>
            <option value="Bogota">Bogota</option>
        </select>
        <br>
        Perfil:
        <br>
        <textarea name="perfil" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Aceptar">
    </form>

</body>
</html>