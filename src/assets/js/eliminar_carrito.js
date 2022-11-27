const eliminar_elemento = (id) => {
  $.ajax({
    type: "POST",
    url: "src/controllers/eliminar_carrito.php",
    data: "id=" + id,
    success: (mensaje) => {
      $("#carrito").load(window.location + " #carrito");
    },
  });
};
