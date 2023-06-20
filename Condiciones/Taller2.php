<?php
    $horario_trabajo = $_REQUEST ['tipo'];
    $horas_trabajadas = $_REQUEST ['horas_trabajadas'];
    $dias_esxtras = $_REQUEST ['extras'];
    $descuento_valor = true;
    $descuento = 0;
    $tarifa = 0;
    
    if ((50000 * $horas_trabajadas)>=800000 and $horario_trabajo == 'diurno' or (80000 * $horas_trabajadas) >= 800000 && $horario_trabajo == 'nocturno' ) {
        echo "se el descuenta el 10% ".'<br>';
        if ($horario_trabajo == 'diurno') {
            $descuento = ( 50000 * $horas_trabajadas)*0.1;
            $descuento_valor = false;
            echo "valor a pagar ",$descuento.'<br>';
        }else{
            $descuento = ( 80000 * $horas_trabajadas)*0.1;
            $descuento_valor = false;
            echo "valor a pagar ",$descuento.'<br>';
        }
    }else {
        echo "no se le descuenta".'<br>';
        $descuento_valor = true;
    }

    if ($dias_esxtras == 'si') {
        if ($descuento_valor == true) {
            if ($horario_trabajo == 'diurno') {
                $tarifa = ( 50000 * $horas_trabajadas)*1.15;
            }else{
                $tarifa = ( 80000 * $horas_trabajadas)*1.15;
            }
            echo "valor a pagar con aumento del 15% ",$tarifa.'<br>';
        }else{
            $tarifa = $descuento*1.15;
            echo "valor a pagar con descuento del 10% y aumento del 15% ", $tarifa.'<br>';
        }
    }else {
        if ($descuento_valor == true) {
            if ($horario_trabajo == 'diurno') {
                $tarifa = 50000 * $horas_trabajadas;
            }else{
                $tarifa = 80000 * $horas_trabajadas;
            }
            echo "valor a pagar con aumento del 15% ",$tarifa.'<br>';
        }else{
            echo "no se le aumento pero se le descuenta el 10% ", $descuento.'<br>';
        }
    }
?>