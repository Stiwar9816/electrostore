$(() => {
  $("#registro_usuarios").submit((event) => {
    let parametros = $("#registro_usuarios").serialize();
    $.ajax({
      type: "POST",
      url: "src/controllers/registro_usuario.php",
      data: parametros,
      cache: false,
      beforeSend: (objeto) => {
        $("#mensaje_respuesta").html("Mensaje: Cargando...");
      },
      success: (mensaje) => {
        $("#mensaje_respuesta").html(mensaje);
        if (mensaje.includes("registrado")) {
          $("#registro_usuarios")[0].reset();
          location.replace("login.php");
        }
      },
    });
    event.preventDefault();
  });
});
