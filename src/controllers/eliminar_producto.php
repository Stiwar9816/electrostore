<?php
require_once('../config/db.php');
require_once('../config/conexion.php');

if (isset($_GET['id'])) {
    $id_producto = intval($_GET['id']);
    $query = mysqli_query($con, "SELECT imagen FROM productos WHERE id = '" . $id_producto . "'");
    $result = mysqli_fetch_array($query);
        if ($borrar = mysqli_query($con, "DELETE FROM productos WHERE id = '" . $id_producto . "'")) {
            unlink("../assets/img/".$result[0]);
            $messages[] = 'Datos eliminados exitosamenten ✅';
        } else {
            $errors[] = ' Lo siento algo ha salido mal intenta nuevamente. ❌';
        }
}

if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
