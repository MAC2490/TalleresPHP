<h1>Tienda</h1>

<?php
	if(empty($_REQUEST)){
?>
	<form action="" method="POST">
		<label for="">Ingrese la cantidad de clientes</label>
		<input type="number" name="cant">
		<input type="submit" name="submit" value="Enviar">
	</form>
<?php
}else if(isset($_REQUEST['submit'])){
?>
<form action="" method="POST">
	<input type="hidden" name="cantidad" value="<?=$_REQUEST['cant']?>">
	<?php
	$cant = $_REQUEST['cant'];
	for ($i=0; $i < $cant ; $i++) { 
	?>  
        <br>
        Cliente <?=$i?>
        Monto Total: <input type="text"  name="monto[]">
        Paga con: <input type="text"  name="entrego[]">
        <br>
    <?php
}
?>  
    <input type="submit" value="enviar">
</form>

<?php
}else{ 
    $monto=$_REQUEST['monto'];
    $entrego=$_REQUEST['entrego'];
    $cantidad=$_REQUEST['cantidad'];
    $acum=0;
    $cont=0;
    for($i=0; $i < $cantidad ; $i++){ 
        $cambio=$entrego[$i]-$monto[$i];
        $iva=$monto[$i]*1.19;
        ?>
            <br>
            Cliente: <?=$i?>
            Paga: <input type="text" value="<?=$monto[$i]?>" disabled>
            Entregó: <input type="text" value="<?=$entrego[$i]?>" disabled>
            IVA: <input type="text" value="<?=$iva?>" disabled>
            Cambio: <input type="text" value="<?=$cambio?>" disabled>
            <br>
        <?php
        $cont++;
        $acum=$acum+$monto[$i];
    }
    ?>
    <br>
    Clientes atendidos: <?=$cont?>
    <br>
    Valor vendido en el dia: <input type="text" value="<?=$acum?>" disabled>

    <?php
}
?>