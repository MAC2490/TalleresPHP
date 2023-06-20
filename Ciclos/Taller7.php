<h1>Estudiantes</h1>
<?php
    if(empty($_REQUEST)){
?>
    <form action="" method="POST">
        <label for="">Ingrese la cantidad de Estudiantes</label>
        <input type="number" name="cant">
        <input type="submit" name="submit" value="Enviar">
    </form>
<?php
}else if(isset($_REQUEST['submit'])){
        ?>
        <form action="" method="post">
            <input type="hidden" name="cantidad" value="<?=$_REQUEST['cant']?>">
            <?php
            $cant=$_REQUEST['cant'];
            for ($i=0; $i < $cant; $i++) { 
                ?>
                    <br>
                    Ingrese el codigo del alumno:<input type="text" name="id[]">
                    Ingrese el nombre del estudiante: <input type="text" name="name[]">
                    Indicador de desempeño: <input type="number" name="indicador[]" step="any">
                    <br>
                <?php
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
<?php
}else{
    $id=$_REQUEST['id'];
    $nombre=$_REQUEST['name'];
    $cantidad=$_REQUEST['cantidad'];
    $indicador=$_REQUEST['indicador'];
    for ($i=0; $i < $cantidad; $i++) {
        ?>
        <br>
        <?php 
        if($indicador[$i]>0 && $indicador[$i]<=10){
            ?>
            codigo: <input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante: <input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño:<input type="text" value="DEFICIENTE" disabled>
            
            <?php
        }else if($indicador[$i]>11 && $indicador[$i]<=30){
            ?>
            codigo:<input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante:<input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño: <input type="text" value="INSUFICIENTE" disabled>
                
        <?php
        }else if($indicador[$i]>31 && $indicador[$i]<=50){
            ?>
            codigo:<input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante: <input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño:<input type="text" value="ACEPTABLE" disabled>
        <?php
        }else if($indicador[$i]>51 && $indicador[$i]<=70){
            ?>
            codigo:<input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante:<input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño: <input type="text" value="BUENO" disabled>
        <?php
        }else if($indicador[$i]>71 && $indicador[$i]<=90){
            ?>
            codigo:<input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante:<input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño:<input type="text" value="SOBRESALIENTE" disabled>
        <?php
        }else if($indicador[$i]>90){
            ?>
            codigo:<input type="text" value="<?=$id[$i]?>" disabled>
            nombre del estudiante: <input type="text" value="<?=$nombre[$i]?>" disabled>
            Indicador de desempeño:<input type="text" value="EXCELENTE" disabled>
        <?php
        }
        ?>
        <br>
        <?php
    }
}
?>