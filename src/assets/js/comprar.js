$(() => {
  $("#envio_productos").submit((event) => {
    let parametros = $("#envio_productos").serialize();
    $.ajax({
      type: "POST",
      url: "src/controllers/generar_factura.php",
      data: parametros,
      cache: false,
      beforeSend: (objeto) => {
        $("#mensaje_respuesta").html("Mensaje: Cargando...");
      },
      success: (mensaje) => {
        if (mensaje.includes("¡Bien hecho!")) {
          window.open("src/controllers/generar_factura.php");
          $("#envio_productos")[0].reset();
          //   $("#pdf").html(mensaje);
        } else {
          $("#mensaje_respuesta").html(mensaje);
        }
      },
    });
    event.preventDefault();
  });
});
