<?php
    include_once("conexion.php");

    $email = $_GET['email'];

    $coenxion->query("DELETE FROM alumnos where email='$email'")

?>

<a href="eliminar.php?
    email=<?php echo $row['email'] ?>">
    <i class="icon-edit">Eliminar</i>
</a>