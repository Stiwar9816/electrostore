$(() => {
  $("input#cantidad").change(function (event) {
    let cantidad = $(this).val();
    if (cantidad != "" && cantidad > -1 && cantidad != 0) {
      let id = $(this).data("id");
      let precio = $(this).data("precio");
      let format = new Intl.NumberFormat("es-CO", {
        style: "currency",
        currency: "COP",
        minimumFractionDigits: 0,
      });
      let sub_total = precio * cantidad;
      $(this)
        .parentsUntil(".container")
        .find(".total")
        .text("Total: " + format.format(sub_total));
      $.post(
        "src/controllers/modificar_precio.php",
        {
          id: id,
          precio: precio,
          stock: cantidad,
        },
        function (event) {
          $("#total").text("Total: " + event);
        }
      );
    }
    // console.log(value);
  });
});
