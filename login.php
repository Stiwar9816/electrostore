<?php
$active_sesion = 'active';

?>
<!doctype html>
<html lang="es">

<?php include_once('./src/components/head_admin.php') ?>

<body class="text-center form-center">
    <!-- Navbar -->
    <?php include_once('src/components/navbar.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <div class="my-5 text-center">
            <main class="form-signin w-150 m-auto">
                <form>
                    <img class="mb-4" src="./src/assets/img/logo.png" alt="" width="160" height="140">
                    <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Iniciar Sesión</button>
                    <a href="./register.php">No tienes una cuenta? Registrtate aquí!</a>
                    <a href="./index.php">Volver a la pagina principal</a>
                </form>
            </main>

            <!-- Footer -->
            <?php include_once('src/components/footer.php') ?>
            <!-- End Footer -->
        </div>
    </div>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>

</html>