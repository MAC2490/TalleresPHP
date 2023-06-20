<?php
    $ventas_mes = $_REQUEST['ventas_mes'];
    $opcion = $_REQUEST['opcion'];

    if ($ventas_mes > 10000000 and $opcion == 2) {
        echo "Recibe comicion del 10% ";
    }else if ($ventas_mes > 10000000 and $opcion == 1) {
        echo "Recibe comicion del 4% ";
    }else if ($ventas_mes <= 10000000 and $opcion == 2){
        echo "Recibe comicion del 2% ";
    }else if ($ventas_mes <= 10000000 and $opcion == 1) {
        echo "Recibe comicion del 1% ";
    }
?>