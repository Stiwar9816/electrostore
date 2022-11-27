<!-- Modal add products -->
<div class="modal fade" id="datos_usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="datos_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="datos_usuarioLabel">Agregar Nuevo Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" name="envio_producto" id="envio_productos" method="post">
                    <div class="row">
                        <h2>¿Esta seguro de su compra?</h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Generar factura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal add products -->