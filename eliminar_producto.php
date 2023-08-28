<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Realizar la eliminación en la base de datos
    $deleteQuery = "DELETE FROM productos WHERE id = $id";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "Producto eliminado exitosamente";
    } else {
        echo "Error al eliminar el producto: " . mysqli_error($conn);
    }
}
?>
