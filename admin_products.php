<!DOCTYPE html>
<html lang="es">
<?php include_once('./src/components/head.php') ?>

<body>
    <!-- Navbar -->
    <?php include_once('./src/components/navbar.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <!-- Banner -->
        <?php include_once('./src/components/banner.php') ?>
        <!-- End Banner -->

        <h2 class="text-center mt-5">Listados de productos</h2>

        <!-- Button modal add products -->
        <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#addProducts">
            <i class="fa-solid fa-plus"></i> Agregar nuevo producto
        </button>
        <!-- End Button modal add products -->

        <!-- Modal_add_products -->
        <?php include_once('./src/components/modal_add_products.php') ?>
        <!-- End Modal_add_products -->
        <!-- Table_products -->
        <?php include_once('./src/components/table_products.php') ?>
        <!-- End Table products -->
        <!-- Modal Update -->
        <?php include_once('./src/components/modal_update.php') ?>
        <!-- End Modal update -->

        <div class="py-5"></div>
        <!-- Footer -->
        <?php include_once('./src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
    <!-- Scripts JS Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                },
            });
        });
    </script>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>

</html>