<h1>Alumnos</h1>
<?php
	if (empty($_REQUEST)) {
?>
	<form action="" method="POST">
		<label for="">Ingrese la cantidad de alumnos</label>
		<input type="number" name="cant">
		<input type="submit" name="submit" value="Enviar">
	</form>
<?php
} else if (isset($_REQUEST['cant'])) {
?>
	<form action="" method="POST">
		<input type="hidden" name="cantidad" value="<?= $_REQUEST['cant'] ?>">
		<?php
		$cant = $_REQUEST['cant'];
		for ($i = 0; $i < $cant; $i++) {
		?>
			<br>
			Código del alumno: <input type="text" name="codigo[]">
			<br>
			Nombre del estudiante: <input type="text" name="nombre[]">
			<br>
			Nota 1: <input step="any" type="number" name="nota1[]">
			<br>
			Nota 2: <input step="any" type="number" name="nota2[]">
			<br>
			Nota 3: <input step="any" type="number" name="nota3[]">
			<br>
		<?php
		}
		?>
		<input type="submit">
	</form>
<?php
} else {
	$cant = $_REQUEST['cantidad'];
	$promedio_mayor = 0;
	$nombre_estudiante = $_REQUEST['nombre'];
	$codigo_estudiante = $_REQUEST['codigo'];
	$nota1 = $_REQUEST['nota1'];
	$nota2 = $_REQUEST['nota2'];
	$nota3 = $_REQUEST['nota3'];
	$promedio_temp = 0;
	$nombre = '';
	$codigo = '';
	for ($i = 0; $i < $cant; $i++) {
		$promedio_mayor = ($nota1[$i] + $nota2[$i] + $nota3[$i]) / 3;
		if ($promedio_mayor > $promedio_temp) {
			$promedio_temp = $promedio_mayor;
			$nombre = $nombre_estudiante[$i];
			$codigo = $codigo_estudiante[$i];
		}
	}

	echo "Alumno con el promedio más alto: ", $nombre. '<br>';
	echo "Código del estudiante: ", $codigo. '<br>';
	echo "Promedio del estudiante: ", $promedio_temp. '<br>';
}
?>
