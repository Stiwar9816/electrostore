$(() => {
  $("#inicio_sesion").submit((event) => {
    let parametros = $("form").serialize();
    $.ajax({
      type: "POST",
      url: "src/controllers/iniciar_sesion.php",
      data: parametros,
      cache: false,
      success: (message) => {
        if (!message.includes("DOCTYPE")) {
          $("#mensaje_respuesta").html(message);
        }
        if (message.includes("DOCTYPE")) {
          location.reload();
        }
      },
    });
    event.preventDefault();
  });
});
