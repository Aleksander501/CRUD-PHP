<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $insertQuery = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    if (mysqli_query($conn, $insertQuery)) {
        echo "Producto agregado exitosamente";
    } else {
        echo "Error al agregar el producto: " . mysqli_error($conn);
    }
}
?>

