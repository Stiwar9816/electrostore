<?php
require_once('../config/db.php');
require_once('../config/conexion.php');
// require_once('../config/redirecion.php');

if (empty($_POST['ean_agg'])) {
    $errors[] = "EAN del producto vacío";
} elseif (empty($_POST['marca_agg'])) {
    $errors[] = "Marca del producto vacío";
} elseif (empty($_POST['modelo_agg'])) {
    $errors[] = "Modelo vacío";
} elseif (empty($_POST['peso_agg'])) {
    $errors[] = "Peso del producto vacío";
} elseif (empty($_POST['stock_agg'])) {
    $errors[] = "Stock del producto vacío";
} elseif (empty($_POST['precio_agg'])) {
    $errors[] = "Precio del producto vacío";
} elseif (empty($_POST['pulgadas_agg'])) {
    $errors[] = "Pulgadas del producto vacío";
} elseif (empty($_POST['resolucion_agg'])) {
    $errors[] = "Resolución del producto vacío";
} elseif (empty($_FILES['imagen_agg']['name'])) {
    $errors[] = "Imagen del producto vacío";
} elseif (!empty($_POST['marca_agg']) && !empty($_POST['modelo_agg']) && !empty($_POST['peso_agg']) && !empty($_POST['stock_agg']) && !empty($_POST['precio_agg']) && !empty($_POST['pulgadas_agg']) && !empty($_POST['resolucion_agg']) && !empty($_FILES['imagen_agg']['name'])) {



    //datos obtenidos por metodo POST y FILES
    $codigo = filter_var($_POST['ean_agg'], FILTER_SANITIZE_NUMBER_INT);
    $marca = filter_var(strtoupper($_POST['marca_agg']), FILTER_SANITIZE_STRING);
    $modelo = filter_var($_POST['modelo_agg'], FILTER_SANITIZE_STRING);
    $peso = $_POST['peso_agg'];
    $stock = filter_var($_POST['stock_agg'], FILTER_SANITIZE_NUMBER_INT);
    $precio = filter_var($_POST['precio_agg'], FILTER_SANITIZE_NUMBER_INT);
    $pulgadas = $_POST['pulgadas_agg'];
    $resolucion = filter_var(strtoupper($_POST['resolucion_agg']), FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion_agg'], FILTER_SANITIZE_STRING);

    /**  Datos de blob de la imagen 
     * $target_dir -> ruta de la imagen
     * $sanitize_nombre -> nombre de imagen limpia
     * $target_file -> Path de la imagen
     * $imagen_type -> Extension de la imagen
     * $imagen_size -> peso de la imagen
     */
    $imagen = $_FILES['imagen_agg']['name'];
    $target_dir = "../assets/img/";
    $sanitize_nombre = basename($imagen);
    $target_file = $target_dir . $sanitize_nombre;
    $imagen_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $imagen_size = $_FILES['imagen_agg']['size'];

    // Validación de extensiones y peso permitidos de imagen
    if (($imagen_type != "jpg" && $imagen_type != 'png' && $imagen_type != 'jpeg') and $imagen_size > 0) {
        $errors[] = "Lo sentimos, sólo se permiten archivos JPG , JPEG, PNG";
    } else if ($imagen_size > 5242880) { //5242880 byte = 5MB
        $errors[] = "Lo sentimos, pero el archivo es demasiado grande. Selecciona logo de menos de 1MB";
    } else {

        //Validar si el codigo del producto ya existe
        $sql = "SELECT * FROM productos WHERE codigo = '" . $codigo . "'";
        $consulta_verificacion_usuario = mysqli_query($con, $sql);
        $consulta_verificacion = mysqli_num_rows($consulta_verificacion_usuario);
        if ($consulta_verificacion == 1) { 
            $errors[] = "Lo sentimos , el código EAN del producto ya se encuentra registrado.";
        } else {
            // Final de validación
            if ($imagen_size > 0) {
                move_uploaded_file($_FILES['imagen_agg']['tmp_name'], $target_file);
            }

            $sql = "INSERT INTO productos (garantia,id, codigo, imagen, marca, modelo, peso,precio, pulgadas, resolucion, descripcion, stock) VALUES(DEFAULT,'','$codigo','$imagen','$marca','$modelo','$peso','$precio','$pulgadas','$resolucion','$descripcion','$stock')";

            $consulta_nueva_insercion = mysqli_query($con, $sql);
            if ($consulta_nueva_insercion) {
                $messages[] = 'El producto ha sido registrado';
            } else {
                $errors[] = " Lo siento algo ha salido mal intenta nuevamente.";
            }
        }
    }
}

if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
