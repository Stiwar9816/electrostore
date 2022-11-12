
<?php
$active_carrito = 'active';
session_start();
include('src/utils/is_logout.php');
// include('src/utils/is_logged.php');
?>
<?php
if (!isset($_SESSION["usuario"])) {
	print "<script>alert(\"Acción imposible primero inicia sesion antes de comprar!\");window.location='login.php';</script>";
}

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

        <div class="carrito text-center py-5">
            <h4>No hay productos añadidos</h4>
            <p>Total: $0</p>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Ver catalogo</a>
            <a href="#" class="btn btn-success"><i class="fa-solid fa-rotate"></i> Actualizar</a>
        </div>

        <!-- Footer -->
        <?php include_once('src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>


</html>