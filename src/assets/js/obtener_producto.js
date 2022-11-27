$("#updateProducts").on("show.bs.modal", (event) => {
    let button = $(event.relatedTarget);
    let id = button.data("id");
    let codigo = button.data("codigo");
    let marca = button.data("marca");
    let modelo = button.data("modelo");
    let peso = button.data("peso");
    let stock = button.data("stock");
    let precio = button.data("precio");
    let pulgadas = button.data("pulgadas");
    let resolucion = button.data("resolucion");
    let descripcion = button.data("descripcion");
  
    let modal = $("#updateProducts");
    modal.find(".modal-body #id_edit").val(id);
    modal.find(".modal-body #ean_edit").val(codigo);
    modal.find(".modal-body #marca_edit").val(marca);
    modal.find(".modal-body #modelo_edit").val(modelo);
    modal.find(".modal-body #peso_edit").val(peso);
    modal.find(".modal-body #stock_edit").val(stock);
    modal.find(".modal-body #precio_edit").val(precio);
    modal.find(".modal-body #pulgadas_edit").val(pulgadas);
    modal.find(".modal-body #resolucion_edit").val(resolucion);
    modal.find(".modal-body #descripcion_edit").val(descripcion);
  });