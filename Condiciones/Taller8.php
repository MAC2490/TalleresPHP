<?php
    $cantidad_camisas = $_REQUEST ['cantidad_camisas'];

    if ($cantidad_camisas >= 3) {
        $descuento = ($cantidad_camisas * 45000)*0.20;
        $valor_pagar =($cantidad_camisas * 45000)-$descuento;
        echo "descuento del 20% ",$valor_pagar.'<br>';
    }else {
        $descuento = ($cantidad_camisas * 45000)*0.10;
        $valor_pagar =($cantidad_camisas * 45000)-$descuento;
        echo "descuento del 10% ",$valor_pagar.'<br>';
    }
?>