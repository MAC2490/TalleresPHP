<?php
    $tiempo_activida = $_REQUEST ['tiempo_activida'];
    $tipo_actividad = $_REQUEST ['tipo_actividad'];
    $calorias = 0;

    if ($tipo_actividad == 'sentado') {
        $calorias = 1.66 * $tiempo_activida;
    }else {
        $calorias = 1.088 * $tiempo_activida;
    }
    echo "Calorias consumidas ", $calorias.'<br>';
    echo "peso total ",(70+$calorias).'<br>';
?>