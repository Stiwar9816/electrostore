<?php
require_once('../config/db.php');
require_once('../config/conexion.php');
include('../utils/is_logout.php');

if (empty($_POST['usuario'])) {
    $errors[] = "Campo usuario esta vacío";
} elseif (empty($_POST['password'])) {
    $errors[] = "Contraseña vacío";
} elseif (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = mysqli_real_escape_string($con, $_POST['usuario']);
    $sql = "SELECT usuario,correo,password,privilegio FROM usuarios where usuario = '$usuario'";
    $resultado = mysqli_query($con, $sql);
    $cadena_resultado = mysqli_fetch_object($resultado);

    if ($resultado->num_rows == 1) {

        if ($cadena_resultado->usuario == $usuario) {
            if (password_verify($_POST['password'], $cadena_resultado->password)) {
                session_start();
                $_SESSION['usuario'] = $cadena_resultado->usuario;
                $_SESSION['correo'] = $cadena_resultado->correo;
                $_SESSION['privilegio'] = $cadena_resultado->privilegio;
                if ($_SESSION['privilegio'] != 1) {
                    header("location:" . URL_BASE . "index.php");
                    exit();
                }
                header("location:" . URL_BASE . "admin_compras.php");
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


if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
