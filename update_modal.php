<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm">
                    <div class="form-group">
                        <label for="updateNombre">Nombre:</label>
                        <input type="text" class="form-control" id="updateNombre" name="updateNombre" required>
                    </div>
                    <div class="form-group">
                        <label for="updateDescripcion">Descripcion:</label>
                        <input type="text" class="form-control" id="updateDescripcion" name="updateDescripcion" required>
                    </div>
                    <div class="form-group">
                        <label for="updatePrecio">Precio:</label>
                        <input type="number" class="form-control" id="updatePrecio" name="updatePrecio" required>
                    </div>
                    <input type="hidden" id="updateId" value="">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnActualizar">Actualizar</button>
            </div>
        </div>
    </div>
</div>
