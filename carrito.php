<?php
$active_carrito = 'active';
session_start();
include_once('src/config/db.php');
include_once('src/config/conexion.php');
include('src/utils/is_logout.php');
include('src/helpers/formato_moneda.php');
?>
<?php
if (!isset($_SESSION["usuario"])) {
    print "<script>alert(\"Acción imposible primero inicia sesion antes de comprar!\");window.location='login.php';</script>";
}
?>
<?php

if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {
        $id = base64_decode($_GET['id']);
        $arreglo = $_SESSION['carrito'];
        $encontro = false;
        $numero = 0;
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i]['id'] == $id) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $arreglo[$numero]['stock'] = $arreglo[$numero]['stock'] + 1;
            $_SESSION['carrito'] = $arreglo;
        } else {
            $marca = "";
            $precio = 0;
            $imagen = "";
            $re = mysqli_query($con, "SELECT * FROM productos WHERE id=" . $id);
            while ($f = mysqli_fetch_array($re)) {
                $marca = $f['marca'];
                $precio = $f['precio'];
                $imagen = $f['imagen'];
                $modelo = $f['modelo'];
            }
            $datosNuevos = array(
                'id' => $id,
                'marca' => $marca,
                'precio' => $precio,
                'imagen' => $imagen,
                'modelo' => $modelo,
                'stock' => 1
            );

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito'] = $arreglo;
        }
    }
} else {
    if (isset($_GET['id'])) {
        $marca = "";
        $precio = 0;
        $imagen = "";
        $re = mysqli_query($con, "SELECT * FROM productos where id=" . $id);
        while ($f = mysqli_fetch_array($re)) {
            $marca = $f['marca'];
            $precio = $f['precio'];
            $imagen = $f['imagen'];
            $modelo = $f['modelo'];
        }
        $arreglo[] = array(
            'id' => $id,
            'marca' => $marca,
            'precio' => $precio,
            'imagen' => $imagen,
            'modelo' => $modelo,
            'stock' => 1
        );
        $_SESSION['carrito'] = $arreglo;
    }
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
        <h2 class="text-center mt-5">Lista de productos en el carrito</h2>
        <!-- Modal_add_products -->
        <?php include_once('src/components/modal_datos_usuario.php') ?>
        <!-- Table carrito -->
        <?php include_once('src/components/table_carrito.php'); ?>
        <!-- End Table carrito -->
        <!-- Footer -->
        <?php include_once('src/components/footer.php') ?>
        <!-- End Footer -->
    </div>
    <!-- Datatables carrito -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#carrito').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
                },
            });
        });
    </script>
    <!-- Script eliminar y aunmentar elementos carrito -->
    <script src="src/assets/js/eliminar_carrito.js"></script>
    <script src="src/assets/js/editar_cantidad.js"></script>
    <script src="src/assets/js/comprar.js"></script>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>


</html>