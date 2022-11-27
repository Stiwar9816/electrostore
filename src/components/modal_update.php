<!-- Modal update -->
<div class="modal fade" id="updateProducts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateProductsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateProductsLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" name="editar_producto" id="editar_productos" method="post">
                    <div class="row">
                        <div id="mensaje_respuesta_update"></div>
                        <!-- <div class="col-3 mb-3"> -->
                            <!-- <label for="id" class="col-form-label">ID:</label> -->
                            <input type="number" min="0" hidden class="form-control" name="id_edit" id="id_edit">
                        <!-- </div> -->
                        <div class="col-3 mb-3">
                            <label for="ean" class="col-form-label">EAN:</label>
                            <input type="number" min="0" class="form-control" name="ean_edit" id="ean_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="marca" class="col-form-label">Marca:</label>
                            <input type="text" class="form-control" name="marca_edit" id="marca_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="modelo" class="col-form-label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo_edit" id="modelo_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="peso" class="col-form-label">Peso:</label>
                            <input type="text" class="form-control" name="peso_edit" id="peso_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="stock" class="col-form-label">Stock:</label>
                            <input type="number" min="0" class="form-control" name="stock_edit" id="stock_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="pricio" class="col-form-label">Precio:</label>
                            <input type="number" min="0" class="form-control" name="precio_edit" id="precio_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="pulgadas" class="col-form-label">Pulgadas:</label>
                            <input type="text" min="0" class="form-control" name="pulgadas_edit" id="pulgadas_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="resolucion" class="col-form-label">Resolucion:</label>
                            <input type="text" min="0" class="form-control" name="resolucion_edit" id="resolucion_edit">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" min="0" class="form-control" name="descripcion_edit" id="descripcion_edit">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="imagen" class="col-form-label">Imagen:</label>
                            <input type="file" class="form-control" name="imagen_edit" id="imagen_edit" require>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Modal Update -->