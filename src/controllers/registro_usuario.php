<?php
require_once('../config/db.php');
require_once('../config/conexion.php');
if (empty($_POST['usuario'])) {
    $errors[] = "Usuario vacío";
} elseif (empty($_POST['nombre'])) {
    $errors[] = "Nombre vacío";
} elseif (empty($_POST['correo'])) {
    $errors[] = "Correo vacío";
} elseif (empty($_POST['password'])) {
    $errors[] = "Password vacío";
} elseif (empty($_POST['confirm_password'])) {
    $errors[] = "Confirmar contraseña vacío";
} elseif ($_POST['password'] != $_POST['confirm_password']) {
    $errors[] = "Las contraseñas no son iguales";
} elseif (!empty($_POST['usuario']) && !empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

    $password = $_POST['password'];
    $password_encriptada = password_hash($password, PASSWORD_DEFAULT);
    $usuario = mysqli_real_escape_string($con, (strip_tags($_POST['usuario'], ENT_QUOTES)));
    $nombre = mysqli_real_escape_string($con, (strip_tags($_POST['nombre'], ENT_QUOTES)));
    $correo = mysqli_real_escape_string($con, (filter_var(trim($_POST['usuario']), FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL)));
    $fecha_registro = date("Y-m-d H:i:s");
    $sql = "INSERT INTO usuarios (id, nombre_completo, usuario, correo, password, fecha_registro, privilegio) VALUES('','$nombre','$usuario','$correo','$password_encriptada','$fecha_registro','')";
    try {
        $consulta_nueva_insercion = mysqli_query($con, $sql);
        if ($consulta_nueva_insercion) {
            $messages[] = 'El usuario a sido registrado';
        } else {
            $errors[] = " Lo siento algo ha salido mal intenta nuevamente.";
        }
    } catch (\Throwable $th) {
        $errors[] = 'Este usuario ya existe';
    }
    
} else {
    $errors[] = "Error desconocido";
}

if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
