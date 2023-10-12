<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include_once("cn.php");

//$conexion = mysqli_connect('localhost','root','','prueba')
//or die(mysql_error($mysqli));          

bifur($conexion);


function bifur($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
}

function insertar($conexio){
    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    
    $consulta = "INSERT INTO usuario(nombre,apellido) VALUES ('$nombre', '$apellido')";

    mysqli_query($conexio,$consulta);
    mysqli_close($conexio);
    echo "<p>Hola, $nombre. ¡Bienvenido!</p>";
    mostrar();
}

function mostrar(){
    $conex = new mysqli('localhost','root','','prueba');
    $sql = "SELECT nombre, apellido FROM usuario";
    $result = $conex->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Mostrar los datos en una tabla
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nombre"] . "</td> <td>" . $row["apellido"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron usuarios.";
    }
}
?>

</body>
</html>
