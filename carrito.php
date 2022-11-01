<!DOCTYPE html>
<html lang="en">
<?php include_once('./src/components/head.php') ?>

<body>
    <!-- Navbar -->
    <?php include_once('./src/components/navbar.php') ?>
    <!-- End Navbar -->

    <div class="container">
        <!-- Banner -->
        <?php include_once('./src/components/banner.php') ?>
        <!-- End Banner -->

        <div class="carrito text-center py-5">
            <h4>No hay productos añadidos</h4>
            <p>Total: $0</p>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Ver catalogo</a>
            <a href="#" class="btn btn-success"><i class="fa-solid fa-rotate"></i> Actualizar</a>
        </div>

        <!-- Footer -->
        <?php include_once('./src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
</body>

</html>