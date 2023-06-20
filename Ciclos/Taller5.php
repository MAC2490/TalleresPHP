
<h1>Trabajadores</h1>
<?php
    if(empty($_REQUEST)){
?>
    <form action="" method="POST">
        <label for="">Ingrese la cantidad de Trabajadores</label>
        <input type="number" name="cant">
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
}else if(isset($_REQUEST['submit'])){
?>
<form action="" method="post">
    <input type="hidden" name="cantidad" value="<?=$_REQUEST['cant']?>">
    <?php
    $cant=$_REQUEST['cant'];
    for ($i=0; $i < $cant; $i++) { 
        ?>
        Horas trabajadas:<input step="any" type="number" name="horas[]">
        Valor por hora:<input type="text" name="valorHora[]">   
        Que tipo de trabajador es:  
        <select name="tipo[]" id="">
            <option value="1">Digitador</option>
            <option value="2">Diseñador</option>
        </select>
        <br>
        <?php
    }
        ?>
        <input type="submit" value="Enviar">
</form>
<?php
}else{
    $impuestoDigitador=0;
    $inpuestoDiseñador=0;
    $horas=$_REQUEST['horas'];
    $valorHora=$_REQUEST['valorHora'];
    $cantidad=$_REQUEST['cantidad'];
    $tipo=$_REQUEST['tipo'];
    $acum=0;
    $acum1=0;
    
    for ($i=0; $i < $cantidad ; $i++) { 
        $valor=$horas[$i]*$valorHora[$i];
        ?>
        <br>
        <?php
        if($tipo[$i]==1){ 
            ?>
            <?php
            if($valor > 1000000){
                $impuestoDigitador=$valor*0.12;
                $salarioDigitador=$valor*0.1;
                ?>
                Trabajador <?=$i?> Digitador   
                Valor:<input type="text" value="<?=$valor?>" disabled>
                Esto debe pagar de impuestos: <input type="text" value="<?=$impuestoDigitador?>" disabled>
                <?php
                $acum=$acum+$salarioDigitador;
            }else{
                $salarioDigitador=$horas[$i]*$valorHora[$i];
                ?>
                Trabajador <?=$i?> Digitador
                Valor:<input class="form-control" type="text" value="<?=$valor?>" disabled>
                debe pagar de impuestos:<input type="text" value="No debe pagar Impuestos" disabled>
                <?php
                $acum=$acum+$valor;
            }
        }else if($tipo[$i]==2){
            if($valor > 1000000){
                $impuestoDiseñador=$valor*0.10;
                $salarioDiseñador=$valor-$impuestoDiseñador;
                ?>
                Trabajador <?=$i?>  Diseñador
                Valor:<input type="text" value="<?=$valor?>" disabled>
                Esto debe pagar de impuestos: <input type="text" value="<?=$impuestoDiseñador?>" disabled>
                <?php
                $acum1=$acum1+$salarioDiseñador;
            }else{
                $salarioDiseñador=$horas[$i]*$valorHora[$i];
                ?>
                Trabajador <?=$i?> Diseñador
                Valor: <input  type="text" value="<?=$valor?>" disabled>
                Esto debe pagar de impuestos:<input type="text" value="No debe pagar Impuestos" disabled>
                <?php
                $acum1=$acum1+$valor;
            }
        }
        ?>
        <br>
        <?php
    }
    echo "Este es el valor a pagar para todos los digitadores: ",$acum.'<br>';
    echo "Este es el valor a pagar para todos los diseñadores: ",$acum1.'<br>';
    $todo=$acum+$acum1;
    echo "Este es el valor a pagar a todos los trabajadores: ",$todo;
    ?>
    
    <?php
}
?>
