
<h1>Tabla de Multiplicar</h1>
<?php
if(empty($_REQUEST)){
?>
	<form action="" method="POST">
        el numero que desea multiplicar: <input type="number" name="numero">
	    <input type="submit" name="submit" value="Multiplicar">	
	</form>
<?php
}else if(isset($_REQUEST['numero'])){
    $numero=$_REQUEST['numero'];
    for ($i=1; $i < 10; $i++) { 
        $resultado=$numero*$i;
        echo $numero," X ",$i," = ",$resultado.'<br>';
    }
}
?>