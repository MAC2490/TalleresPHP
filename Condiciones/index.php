<?php
    // Taller 1
    // $ventas_mes = $_REQUEST['ventas_mes'];
    // $opcion = $_REQUEST['opcion'];

    // if ($ventas_mes > 10000000 and $opcion == 2) {
    //     echo "Recibe comicion del 10% ";
    // }else if ($ventas_mes > 10000000 and $opcion == 1) {
    //     echo "Recibe comicion del 4% ";
    // }else if ($ventas_mes <= 10000000 and $opcion == 2){
    //     echo "Recibe comicion del 2% ";
    // }else if ($ventas_mes <= 10000000 and $opcion == 1) {
    //     echo "Recibe comicion del 1% ";
    // }

    // Taller 2
    // $horario_trabajo = $_REQUEST ['tipo'];
    // $horas_trabajadas = $_REQUEST ['horas_trabajadas'];
    // $dias_esxtras = $_REQUEST ['extras'];
    // $descuento_valor = true;
    // $descuento = 0;
    // $tarifa = 0;
    
    // if ((50000 * $horas_trabajadas)>=800000 and $horario_trabajo == 'diurno' or (80000 * $horas_trabajadas) >= 800000 && $horario_trabajo == 'nocturno' ) {
    //     echo "se el descuenta el 10% ".'<br>';
    //     if ($horario_trabajo == 'diurno') {
    //         $descuento = ( 50000 * $horas_trabajadas)*0.1;
    //         $descuento_valor = false;
    //         echo "valor a pagar ",$descuento.'<br>';
    //     }else{
    //         $descuento = ( 80000 * $horas_trabajadas)*0.1;
    //         $descuento_valor = false;
    //         echo "valor a pagar ",$descuento.'<br>';
    //     }
    // }else {
    //     echo "no se le descuenta".'<br>';
    //     $descuento_valor = true;
    // }

    // if ($dias_esxtras == 'si') {
    //     if ($descuento_valor == true) {
    //         if ($horario_trabajo == 'diurno') {
    //             $tarifa = ( 50000 * $horas_trabajadas)*1.15;
    //         }else{
    //             $tarifa = ( 80000 * $horas_trabajadas)*1.15;
    //         }
    //         echo "valor a pagar con aumento del 15% ",$tarifa.'<br>';
    //     }else{
    //         $tarifa = $descuento*1.15;
    //         echo "valor a pagar con descuento del 10% y aumento del 15% ", $tarifa.'<br>';
    //     }
    // }else {
    //     if ($descuento_valor == true) {
    //         if ($horario_trabajo == 'diurno') {
    //             $tarifa = 50000 * $horas_trabajadas;
    //         }else{
    //             $tarifa = 80000 * $horas_trabajadas;
    //         }
    //         echo "valor a pagar con aumento del 15% ",$tarifa.'<br>';
    //     }else{
    //         echo "no se le aumento pero se le descuenta el 10% ", $descuento.'<br>';
    //     }
    // }

    //Taller 3
    // $nota_uno = $_REQUEST ['nota_uno'];
    // $nota_dos = $_REQUEST ['nota_dos'];
    // $nota_tres = $_REQUEST ['nota_tres'];

    // $promedio = ($nota_uno+$nota_dos+$nota_tres)/3;
    
    // if ($promedio>=3.5) {
    //     echo "Aprobo promedio: ",$promedio.'<br>';
    // }else{
    //     echo "no aprobo promedio: ",$promedio.'<br>';
    // }

    // Taller 4
    // $valor_compra = $_REQUEST ['valor_compra'];

    // if ($valor_compra >= 100000) {
    //     $valor_descuento = $valor_compra*0.2;
    //     $valor_pagar = $valor_descuento - $valor_compra;
    //     echo "valor a pagar con el descuento ",$valor_pagar.'<br>';
    // }else{
    //     echo "no tiene descuento valor a pagar ",$valor_compra.'<br>';
    // }

    // Taller 5
    // $numero_uno = $_REQUEST ['numero_uno'];
    // $numero_dos = $_REQUEST ['numero_dos'];

    // if ($numero_uno > $numero_dos) {
    //     echo "Numero mayor ", $numero_uno.'<br>';
    //     echo "Numero menor ", $numero_dos.'<br>';
    // }else if ($numero_uno == $numero_dos) {
    //     echo "Numero igual ", $numero_uno.'<br>';
    //     echo "Numero igual ", $numero_dos.'<br>';
    // }else{
    //     echo "Numero mayor ", $numero_dos.'<br>';
    //     echo "Numero menor ", $numero_uno.'<br>';
    // }

    // Taller 6
    // $tiempo_activida = $_REQUEST ['tiempo_activida'];
    // $tipo_actividad = $_REQUEST ['tipo_actividad'];
    // $calorias = 0;

    // if ($tipo_actividad == 'sentado') {
    //     $calorias = 1.66 * $tiempo_activida;
    // }else {
    //     $calorias = 1.088 * $tiempo_activida;
    // }
    // echo "Calorias consumidas ", $calorias.'<br>';
    // echo "peso total ",(70+$calorias).'<br>';

    // Taller 7 
    // $nombre_articulo = $_REQUEST ['nombre_articulo'];
    // $clave_articulo = $_REQUEST ['clave_articulo'];
    // $precio_articulo = $_REQUEST ['precio_articulo'];
    // $descuento = 0;

    // if ($clave_articulo == 01) {
    //     $descuento_menos = $precio_articulo * 0.1;
    //     $descuento = $precio_articulo - $descuento_menos;
    //     echo "Descuento del 10%".'<br>';
    // }else if ($clave_articulo == 02) {
    //     $descuento_menos = $precio_articulo * 0.2;
    //     $descuento =  $precio_articulo - $descuento_menos;
    //     echo "Descuento del 20%".'<br>';
    // }
    // echo "Nombre ",$nombre_articulo.'<br>';
    // echo "Clave ",$clave_articulo.'<br>';
    // echo "Precio ",$descuento.'<br>';

    // Taller 8
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