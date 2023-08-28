<div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="printModalLabel">Imprimir Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php
                include 'db_config.php';

                $query = "SELECT * FROM productos";
                $result = mysqli_query($conn, $query);

                $productos = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $productos[] = $row;
                }
            ?>
            <div id="muestra">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productos as $producto) { ?>
                        <tr>
                            <td><?php echo $producto['id']; ?></td>
                            <td><?php echo $producto['nombre']; ?></td>
                            <td><?php echo $producto['descripcion']; ?></td>
                            <td><?php echo '$ ' . $producto['precio']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="javascript:imprim2();" style="margin-top:5px"><i class="bi bi-printer"></i> Imprimir</button>
                <script>
                    function imprim2() {
                        var titulo = "Titulo Documento";
                        var mywindow = window.open('','PRINT','height=600,width=800');
                        mywindow.document.write('<html><head><title>' +titulo+ '</title>');
                        mywindow.document.write('<style>body{text-transform: uppercase;margin:20mm 15mm 20mm 15mm; text-align:center; font-size:10px; font-family:"Roboto Condensed", sans-serif;}');
                        mywindow.document.write('table{border-collapse: collapse;width: 100%;border: 1px solid black;}');
                        mywindow.document.write('th, td {border: 1px solid black;padding: 8px;text-align: left;}');
                        mywindow.document.write('</style></head><body>');
                        mywindow.document.write('<div class="table-container">');
                        mywindow.document.write(document.getElementById('muestra').innerHTML);
                        mywindow.document.write('</div>');
                        mywindow.document.write('</body></html>');
                        mywindow.document.close();
                        mywindow.focus();
                        mywindow.print();
                        mywindow.close();

                        return true;
                    }
                </script>
            </div>
        </div>
    </div>
</div>
