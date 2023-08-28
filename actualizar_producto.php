<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $updateQuery = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";
    if (mysqli_query($conn, $updateQuery)) {
        echo "Producto actualizado exitosamente";
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conn);
    }
}
?>
