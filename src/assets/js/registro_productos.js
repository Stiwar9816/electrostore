$(() => {
  $("#registro_productos").submit((event) => {
    let parametros = new FormData(
      document.getElementById("registro_productos")
    );
    parametros.append("dato", "valor");
    $.ajax({
      type: "POST",
      url: "src/controllers/registro_productos.php",
      data: parametros,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "html",
      beforeSend: (objeto) => {
        $("#mensaje_respuesta").html(
          "<img src='./src/assets/img/ajax-loader.gif'> Cargando..."
        );
      },
      success: (mensaje) => {
        $("#mensaje_respuesta").html(mensaje);
        if (mensaje.includes("¡Bien hecho!")) {
          $("#registro_productos")[0].reset();
          $("#agregar_productos").load(window.location + " #agregar_productos");
        }
      },
    });
    event.preventDefault();
  });
});

const eliminar_producto = (id) => {
  if (confirm("⚠ ¿Realmente desea eliminar este producto?")) {
    $.ajax({
      type: "GET",
      url: "src/controllers/eliminar_producto.php",
      data: "id=" + id,
      success: (mensaje) => {
        $("#mensaje").html(mensaje);
        $("#agregar_productos").load(window.location + " #agregar_productos");
      },
    });
  }
};

