<?php
// Incluye los archivos necesarios que contienen configuraciones y códigos para los modales y la conexión a la base de datos
include 'db_config.php';
include 'create_modal.php';
include 'update_modal.php'; 
include 'delete_modal.php';
include 'print_modal.php';

// Realiza una consulta a la base de datos para seleccionar todos los productos
$query = "SELECT * FROM productos";
$result = mysqli_query($conn, $query);

// Crea un array para almacenar los productos obtenidos de la consulta
$productos = array();
while ($row = mysqli_fetch_assoc($result)) {
    $productos[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.10.2/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h2>Gestión de productos</h2>
    <button class="btn btn-success mb-2" data-toggle="modal" data-target="#createModal"><i class="bi bi-plus"></i> Agregar</button>
    
    <div class="mb-2 d-flex justify-content-center align-items-center">
    <button class="btn btn-secondary ml-2" data-toggle="modal" data-target="#printModal"><i class="bi bi-printer"></i> Imprimir</button>
    </div>
    
    <table id="dataTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($productos as $producto) { ?>
            <tr>
                <td><?php echo $producto['id']; ?></td>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['descripcion']; ?></td>
                <td><?php echo '$ ' . $producto['precio']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm editar" data-id="<?php echo $producto['id']; ?>" data-nombre="<?php echo $producto['nombre']; ?>" data-descripcion="<?php echo $producto['descripcion']; ?>" data-precio="<?php echo $producto['precio']; ?>"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="#" class="btn btn-danger btn-sm eliminar" data-id="<?php echo $producto['id']; ?>"><i class="bi bi-trash"></i> Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        // Inicializar DataTable con botones de exportación
        $('#dataTable').DataTable({
            "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
            
        });
    });
</script>
<script src="script.js"></script>
</body>
</html>