<!-- Modal add products -->
<div class="modal fade" id="addProducts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductsLabel">Agregar Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" name="registro_producto" id="registro_productos" method="post">
                    <div class="row"> 
                    <div id="mensaje_respuesta"></div>                
                        <div class="col-6 mb-3">
                            <label for="ean" class="col-form-label">EAN:</label>
                            <input type="number" min="0" class="form-control" name="ean_agg" id="ean_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="marca" class="col-form-label">Marca:</label>
                            <input type="text" class="form-control" name="marca_agg"  id="marca_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="modelo" class="col-form-label">Modelo:</label>
                            <input type="text" class="form-control" name="modelo_agg" id="modelo_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="peso" class="col-form-label">Peso:</label>
                            <input type="text" class="form-control" name="peso_agg" id="peso_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="stock" class="col-form-label">Stock:</label>
                            <input type="number" min="0" class="form-control" name="stock_agg" id="stock_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="precio" class="col-form-label">Precio:</label>
                            <input type="number" min="0" class="form-control" name="precio_agg" id="precio_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="pulgadas" class="col-form-label">Pulgadas:</label>
                            <input type="number" min="0" class="form-control" name="pulgadas_agg" id="pulgadas_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="resolucion" class="col-form-label">Resolucion:</label>
                            <input type="text" min="0" class="form-control" name="resolucion_agg" id="resolucion_agg">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" min="0" class="form-control" name="descripcion_agg" id="descripcion_agg">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="imagen" class="col-form-label">Imagen:</label>
                            <input type="file" class="form-control" name="imagen_agg" id="imagen_agg" require>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal add products -->
