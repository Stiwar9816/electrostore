$(() => {
  $("#editar_productos").submit((event) => {
    let parametros = new FormData(document.getElementById("editar_productos"));
    $.ajax({
      type: "POST",
      url: "src/controllers/editar_productos.php",
      data: parametros,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "html",
      beforeSend: (objeto) => {
        $("#mensaje_respuesta_update").html(
          "<img src='./src/assets/img/ajax-loader.gif'> Cargando..."
        );
      },
      success: (mensaje) => {
        $("#mensaje_respuesta_update").html(mensaje);
        if (mensaje.includes("¡Bien hecho!")) {
          $("#agregar_productos").load(window.location + " #agregar_productos");
        }
      },
    });
    event.preventDefault();
  });
});
