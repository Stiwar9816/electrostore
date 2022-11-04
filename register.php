<?php
$active_sesion = 'active';

?>
<!doctype html>
<html lang="es">

<?php include_once('./src/components/head.php') ?>

<body class="text-center form-center">
    <!-- Navbar -->
    <?php include_once('src/components/navbar.php') ?>
    <!-- End Navbar -->
    <div class="container">
        <div class="my-5 text-center">
            <main class="form-signin w-100 m-auto">
                <form role="form" name="registro_usuario" id="registro_usuarios" method="post">
                    <img class="mb-4" src="./src/assets/img/logo.png" alt="" width="160" height="140">
                    <h1 class="h3 mb-3 fw-normal">Registro de usuario</h1>
                    <div id="mensaje_respuesta"></div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                        <label for="floatingInput">Nombre Completo</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="usuario" minlength="3" name="usuario" placeholder="Nombre de usuario">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" require>
                        <label for="floatingInput">Correo electronico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" minlength="6" name="password" placeholder="Contraseña">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="confirm_password" minlength="6" name="confirm_password" placeholder="Confirmar Contraseña">
                        <label for="floatingPassword">Confirmar Contraseña</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mb-3" id="guardar_usuario" type="submit">Registrar</button>
                    <a href="./login.php">Ya tienes una cuenta? Inicia sesión aquí!</a>
                    <a href="./index.php">Volver a la pagina principal</a>
                    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
                </form>
            </main>
            <!-- Footer -->
            <?php include_once('src/components/footer.php') ?>
            <!-- End Footer -->
        </div>
    </div>
    <!-- Scripts de registro de usuario-->
    <script src="src/assets/js/registro_usuarios.js"></script>
    <!-- Scripts JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</body>

</html>