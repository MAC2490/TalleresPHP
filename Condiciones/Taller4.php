<?php
    $valor_compra = $_REQUEST ['valor_compra'];

    if ($valor_compra >= 100000) {
        $valor_descuento = $valor_compra*0.2;
        $valor_pagar = $valor_descuento - $valor_compra;
        echo "valor a pagar con el descuento ",$valor_pagar.'<br>';
    }else{
        echo "no tiene descuento valor a pagar ",$valor_compra.'<br>';
    }
?>