<?php
   $nombre_articulo = $_REQUEST ['nombre_articulo'];
    $clave_articulo = $_REQUEST ['clave_articulo'];
    $precio_articulo = $_REQUEST ['precio_articulo'];
    $descuento = 0;

    if ($clave_articulo == 01) {
        $descuento_menos = $precio_articulo * 0.1;
        $descuento = $precio_articulo - $descuento_menos;
        echo "Descuento del 10%".'<br>';
    }else if ($clave_articulo == 02) {
        $descuento_menos = $precio_articulo * 0.2;
        $descuento =  $precio_articulo - $descuento_menos;
        echo "Descuento del 20%".'<br>';
    }
    echo "Nombre ",$nombre_articulo.'<br>';
    echo "Clave ",$clave_articulo.'<br>';
    echo "Descuento ",$descuento.'<br>';
?>