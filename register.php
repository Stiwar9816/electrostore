<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro TV</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="./src/assets/css/sigin.css">
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form>
            <img class="mb-4" src="./src/assets/img/logo.png" alt="" width="160" height="140">
            <h1 class="h3 mb-3 fw-normal">Registro de usuario</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Jhon Doe">
                <label for="floatingInput">Nombre Completo</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Jhon Doe">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electronico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirmar Contraseña</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Registrar</button>
            <a href="./login.php">Ya tienes una cuenta? Inicia sesión aquí!</a>
            <a href="./index.php">Volver a la pagina principal</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>
</body>

</html>