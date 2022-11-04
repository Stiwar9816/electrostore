// $("#inicio_sesion").submit((event) => {
//   let parametros = $("form").serialize();
//   $.ajax({
//     type: "POST",
//     url: "src/controllers/iniciar_sesion.php",
//     data: parametros,
//     cache: false,
//     beforeSend: (objeto) => {
//       $("#mensaje_respuesta").html("Mensaje: Cargando...");
//     },
//     success: (mensaje) => {
//       // $("#mensaje_respuesta").html(mensaje);
//       // location.replace("admin_compras.php");
//       //   if (mensaje.includes('registrado')) {
//       //       $('#inicio_sesion')[0].reset();
//       //   }
//     },
//   });
//   event.preventDefault();
// });
