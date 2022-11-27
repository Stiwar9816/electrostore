<?php
$active_tienda = 'active';
session_start();
include('src/utils/is_logout.php');
include_once('src/config/db.php');
include_once('src/config/conexion.php');
include('src/helpers/formato_moneda.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once('src/components/head.php') ?>
<!-- End Head -->

<body>
    <!-- Navbar -->
    <?php include_once('src/components/navbar.php') ?>
    <!-- End Navbar -->

    <div class="container">
        <!-- Banner -->
        <?php include_once('src/components/banner.php') ?>
        <!-- End Banner -->

        <!-- List products -->
        <?php include_once('src/components/list_products.php') ?>
        <!-- End List products -->

        <!-- Footer -->
        <?php include_once('src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</body>

</html>