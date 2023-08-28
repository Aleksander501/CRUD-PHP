$(document).ready(function() {
    // Manejar el evento show.bs.modal para limpiar los campos del modal de creación
    $("#createModal").on("show.bs.modal", function() {
        $("#createForm")[0].reset();
    });

    // Manejar el clic en el botón "Agregar"
    $("#btnAgregar").click(function() {
        var nombre = $("#nombre").val();
        var descripcion = $("#descripcion").val();
        var precio = $("#precio").val(); 

        $.ajax({
            url: "agregar_producto.php", 
            method: "POST",
            data: {
                nombre: nombre,
                descripcion: descripcion,
                precio: precio 
            },
            success: function(response) {
                alert(response);
                // Actualizar la tabla después de agregar
                location.reload();
            }
        });
    });

    // Manejar el clic en el botón "Editar"
    $(document).on("click", ".editar", function() {
        var id = $(this).data("id");
        var nombre = $(this).data("nombre");
        var descripcion = $(this).data("descripcion");
        var precio = $(this).data("precio");

        // Colocar los valores en el modal de actualización
        $("#updateId").val(id);
        $("#updateNombre").val(nombre);
        $("#updateDescripcion").val(descripcion);
        $("#updatePrecio").val(precio);

        // Mostrar el modal de actualización
        $("#updateModal").modal("show");
    });

    // Manejar el clic en el botón "Eliminar"
    $(document).on("click", ".eliminar", function() {
        var id = $(this).data("id");

        // Colocar el ID en el modal de eliminación
        $("#deleteId").val(id);

        // Mostrar el modal de eliminación
        $("#deleteModal").modal("show");
    });

    // Manejar la actualización de un producto
    $("#btnActualizar").click(function() {
        var id = $("#updateId").val();
        var nombre = $("#updateNombre").val();
        var descripcion = $("#updateDescripcion").val();
        var precio = $("#updatePrecio").val();

        $.ajax({
            url: "actualizar_producto.php",
            method: "POST",
            data: {
                id: id,
                nombre: nombre,
                descripcion: descripcion,
                precio: precio,
                
            },
            success: function(response) {
                alert(response);
                // Actualizar la tabla después de actualizar
                location.reload();
            }
        });
    });

    // Manejar la eliminación de un producto
    $("#btnEliminar").click(function() {
        var id = $("#deleteId").val();

        $.ajax({
            url: "eliminar_producto.php", 
            method: "POST",
            data: { id: id },
            success: function(response) {
                alert(response);
                // Actualizar la tabla después de eliminar
                location.reload();
            }
        });
    });
});