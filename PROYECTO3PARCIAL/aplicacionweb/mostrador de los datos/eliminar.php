<?php
Eliminar ($_GET['nombre']);
function Eliminar($nombre){
    $sentencia="DELETE FROM formulario WHERE no='".$nombre." '";
    $conexion->query($sentencia)or die("Error al eleminar".mysqli_error($conexion));
    
}
?>