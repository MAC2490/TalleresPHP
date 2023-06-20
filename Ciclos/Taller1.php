<h1>Tienda de Naranja</h1>
<?php 
if (empty($_REQUEST)) {
?>  
    <form action="" method="POST">
        <label for="num">¿Cuantos Clientes?</label>
        <input type="text" name="num">
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
} elseif (isset($_REQUEST['num'])) {
?>
    <form action="" method="POST">
    <?php
        $num = $_REQUEST['num'];
        for ($i=0; $i < $num; $i++) { 
            ?>
            Ingrese la cantidad del cliente <?php echo $i;?>:<input type="number" name="cantidad[]" value="">
            <br>
            <?php
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
    <?php
} else {
    $valor_tienda = 0;
    foreach($_REQUEST['cantidad'] as $cantidad) {
        echo "<p>Cantidad: $cantidad</p>";
        $valor_pagar = $cantidad * 2500;
        if ($cantidad>10) {
            $valor = $valor_pagar * 0.15;
            $valor_descuento = $valor_pagar-$valor;
            echo "Tiene descuento valor a pagar ", $valor_descuento;
            $valor_tienda = $valor_tienda + $valor_descuento;
        }else{
            echo "No tiene descuento valor a pagar ", $valor_pagar;
            $valor_tienda = $valor_tienda + $valor_pagar;
        }
    }
    echo "".'<br>';
    echo "Valor que recibe la tienda ",$valor_tienda;
}
?>