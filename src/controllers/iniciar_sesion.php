<?php

$con = new mysqli('localhost','root','','electrostore');


if (empty($_POST['usuario'])) {
    $errors[] = 'Campo usuario esta vacío';
} elseif (empty($_POST['password'])) {
    $errors[] = 'Contraseña vacío';
} elseif (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $sql = "SELECT nombre_completo,usuario,correo,password,privilegio FROM usuarios where usuario = '$usuario'";
    $resultado = mysqli_query($con, $sql);
    $cadena_resultado = mysqli_fetch_object($resultado);

    if ($resultado->num_rows == 1) {

        if ($cadena_resultado->usuario == $usuario) {
            if (password_verify($_POST['password'], $cadena_resultado->password)) {
                session_start();
                $_SESSION['usuario'] = $cadena_resultado->usuario;
                $_SESSION['correo'] = $cadena_resultado->correo;
                $_SESSION['privilegio'] = $cadena_resultado->privilegio;
                $_SESSION['nombre'] = $cadena_resultado->nombre_completo;
                $_SESSION['carrito'] =[];
                if ($_SESSION['privilegio'] != 1) {
                    header("location: ../../index.php");
                    exit();
                }
                header("location: ../../admin_compras.php");
                exit();
            } else {
                $errors[] = 'Contraseña incorrecta';
            }
        } else {
            $errors[] = 'Usuario incorrecto';
        }
    } else {
        $errors[] = 'Usuario incorrecto';
    }
}
if($_POST){
if (isset($errors)) {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Error!</strong>
    <?php
    foreach ($errors as $error) {
        echo $error;
    }
    ?>
</div>
<?php
}
if (isset($messages)) {
    ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
    <strong>¡Bien hecho!</strong>
    <?php
    foreach ($messages as $message) {
        echo $message;
    }
    ?>
</div>
<?php
}
}