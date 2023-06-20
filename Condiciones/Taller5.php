<?php
    $numero_uno = $_REQUEST ['numero_uno'];
    $numero_dos = $_REQUEST ['numero_dos'];

    if ($numero_uno > $numero_dos) {
        echo "Numero mayor ", $numero_uno.'<br>';
        echo "Numero menor ", $numero_dos.'<br>';
    }else if ($numero_uno == $numero_dos) {
        echo "Numero igual ", $numero_uno.'<br>';
        echo "Numero igual ", $numero_dos.'<br>';
    }else{
        echo "Numero mayor ", $numero_dos.'<br>';
        echo "Numero menor ", $numero_uno.'<br>';
    }
?>