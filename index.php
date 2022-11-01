<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Electro TV</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- Kit Icons FontAwesome -->
  <script src="https://kit.fontawesome.com/a239af1c0c.js" crossorigin="anonymous"></script>
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="./src/assets/css/style.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include_once('./src/components/navbar.php') ?>
  <!-- End Navbar -->

  <!-- Body -->
  <div class="container">
    <!-- Banner -->
    <?php include_once('./src/components/banner.php') ?>
    <!-- End Banner -->

    <div class="products mt-5">
      <h3 class="text-capitalize text-center">productos</h3>
    </div>

    <!-- List products -->
    <?php include_once('./src/components/list_products.php') ?>
    <!-- End List products -->

    <!-- Publicidad -->
    <div class="my-5 text-center">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-md-6">
          <div class="card">
            <img src="./src/assets/img/nota-lg-tv-plus.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Muy pronto en nuestra tienda</h5>
              <p class="card-text">Añadiremos estos productos a nuestra tienda para que veas que no jugamos contigo y tu entretenimiento lo mejor en productos siempre aqui en Electro TV's. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img src="./src/assets/img/nota-lg-tv-plus.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">!Excelente calidad en productos¡</h5>
              <p class="card-text">Llevate nuestros productos de buena calidad a un precio muy econmico para tu bolsillo que esperar, se estan agotando.¡
            </div>
          </div>
        </div>
      </div>
      <!-- End Publiciad -->

      <!-- Logos marcas -->
      <div class="align-center">
        <div class="row mt-5">
          <div class="col-sm-4 col-md-4">
            <img src="./src/assets/img/LG.jpg" class="card-img-top" alt="..." width="200" height="150">
          </div>
          <div class="col-sm-4">
            <img src="./src/assets/img/samsung.jpg" class="card-img-top" alt="..." width="200" height="150">
          </div>
          <div class="col-sm-4">
            <img src="./src/assets/img/sony.jpg" class="card-img-top" alt="..." width="200" height="150">
          </div>
          <div class="col-sm-4">
            <img src="./src/assets/img/kalley.jpg" class="card-img-top" alt="...">
          </div>
          <div class="col-sm-4">
            <img src="./src/assets/img/challenger.jpg" class="card-img-top mt-5" alt="...">
          </div>
          <div class="col-sm-4">
            <img src="./src/assets/img/panasonic.jpg" class="card-img-top mt-3" alt="...">
          </div>
        </div>
      </div>
      <!-- End Logos marca -->

      <!-- Footer -->
      <?php include_once('./src/components/footer.php') ?>
      <!-- End Footer -->
    </div>
    <!-- End Body -->
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>

</html>