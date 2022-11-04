<?php
// include('src/controllers/iniciar_sesion.php');
$active_sesion = 'active';
session_start();
?>
<!doctype html>
<html lang="es">

<?php include('./src/components/head.php') ?>

<body class="text-center form-center">
    <!-- Navbar -->
    <?php include_once('src/components/navbar.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <div class="my-5 text-center">
            <main class="form-signin w-150 m-auto">
                <form  name="inicio_sesion" action="src/controllers/iniciar_sesion.php" id="inicio_sesion" method="post">
                    <img class="mb-4" src="./src/assets/img/logo.png" alt="" width="160" height="140">
                    <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
                    <div id="mensaje_respuesta"></div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="usuario" minlength="3" name="usuario" placeholder="name@example.com" require>
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" minlength="6" name="password" placeholder="Contraseña" require>
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mb-3" id="iniciar_sesion" type="submit">Iniciar Sesión</button>
                    <a href="./register.php">No tienes una cuenta? Registrtate aquí!</a>
                    <a href="./index.php">Volver a la pagina principal</a>
                </form>
            </main>

            <!-- Footer -->
            <?php include_once('src/components/footer.php') ?>
            <!-- End Footer -->
        </div>
    </div>
    <!-- Scripts de inicio de sesion-->
    <!-- <script src="src/assets/js/iniciar_sesion.js"></script> -->
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>

</html>