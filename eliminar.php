<?php
include_once("cn.php");

borrar($conexion);

function borrar($conexion){
    $nombre = $_POST['nombre1']; 
    $consulta = "DELETE FROM usuario WHERE nombre='$nombre'";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}
?>