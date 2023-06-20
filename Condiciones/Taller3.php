<?php
    $nota_uno = $_REQUEST ['nota_uno'];
    $nota_dos = $_REQUEST ['nota_dos'];
    $nota_tres = $_REQUEST ['nota_tres'];

    $promedio = ($nota_uno+$nota_dos+$nota_tres)/3;
    
    if ($promedio>=3.5) {
        echo "Aprobo promedio: ",$promedio.'<br>';
    }else{
        echo "no aprobo promedio: ",$promedio.'<br>';
    }
?>