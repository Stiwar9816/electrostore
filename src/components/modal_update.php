<!-- Modal update -->
<div class="modal fade" id="updateProducts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateProductsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateProductsLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="imagen" class="col-form-label">Imagen:</label>
                            <input type="file" class="form-control" id="imagen">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="ean" class="col-form-label">EAN:</label>
                            <input type="number" min="0" class="form-control" id="ean">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="marca" class="col-form-label">Marca:</label>
                            <input type="text" class="form-control" id="marca">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="modelo" class="col-form-label">Modelo:</label>
                            <input type="text" class="form-control" id="modelo">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="stock" class="col-form-label">Stock:</label>
                            <input type="number" min="0" class="form-control" id="stock">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="price" class="col-form-label">Precio:</label>
                            <input type="number" min="0" class="form-control" id="price">
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Update -->