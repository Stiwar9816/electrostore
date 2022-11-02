<!DOCTYPE html>
<html lang="es">
<?php include_once('./src/components/head_admin.php') ?>

<body>
    <!-- Navbar -->
    <?php include_once('./src/components/navbar.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <!-- Banner -->
        <?php include_once('./src/components/banner.php') ?>
        <!-- End Banner -->
        <h2 class="text-center mt-5">Ultimas compras</h2>

        <!-- Table_products -->
        <?php include_once('./src/components/table_products.php') ?>
        <!-- End Table products -->

        <div class="py-5"></div>
        <!-- Footer -->
        <?php include_once('./src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
</body>
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

</html>