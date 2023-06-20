<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Taller2.php" method="POST">
        Diurno: <input type="radio" name="tipo" value="diurno">
        Nocturno: <input type="radio" name="tipo" value="nocturno">
        <br>
        Horas trabajadas: <input type="number" name="horas_trabajadas">
        <p>Precione SI, si trabajo los domingos y festivos o NO, si no trabajo los dias domingos ni festivos</p>
        SI <input type="radio" name="extras" value="si"> 
        NO <input type="radio" name="extras" value="no">
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>