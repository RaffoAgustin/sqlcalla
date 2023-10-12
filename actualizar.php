<?php
include_once("cn.php");

actualizar($conexion);

function actualizar($conexion){
    $nombre = $_POST['nombre1']; 
    $ape = $_POST['apellido']; 
    $consulta = "UPDATE `usuario` SET `nombre`='$nombre',`apellido`='$ape' WHERE `nombre`='$nombre'";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}
?>