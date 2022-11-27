<?php
require_once('../config/db.php');
require_once('../config/conexion.php');


if (empty($_POST['ean_edit'])) {
    $errors[] = "EAN del producto vacío";
} elseif (empty($_POST['marca_edit'])) {
    $errors[] = "Marca del producto vacío";
} elseif (empty($_POST['modelo_edit'])) {
    $errors[] = "Modelo vacío";
} elseif (empty($_POST['peso_edit'])) {
    $errors[] = "Peso del producto vacío";
} elseif (empty($_POST['stock_edit'])) {
    $errors[] = "Stock del producto vacío";
} elseif (empty($_POST['precio_edit'])) {
    $errors[] = "Precio del producto vacío";
} elseif (empty($_POST['pulgadas_edit'])) {
    $errors[] = "Pulgadas del producto vacío";
} elseif (empty($_POST['resolucion_edit'])) {
    $errors[] = "Resolución del producto vacío";
} elseif (!empty($_POST['marca_edit']) && !empty($_POST['modelo_edit']) && !empty($_POST['peso_edit']) && !empty($_POST['stock_edit']) && !empty($_POST['precio_edit']) && !empty($_POST['pulgadas_edit']) && !empty($_POST['resolucion_edit'])) {

    //datos obtenidos por metodo POST y FILES
    $id = intval($_POST['id_edit']);
    $codigo = filter_var($_POST['ean_edit'], FILTER_SANITIZE_NUMBER_INT);
    $marca = filter_var(strtoupper($_POST['marca_edit']), FILTER_SANITIZE_STRING);
    $modelo = filter_var($_POST['modelo_edit'], FILTER_SANITIZE_STRING);
    $peso = $_POST['peso_edit'];
    $stock = filter_var($_POST['stock_edit'], FILTER_SANITIZE_NUMBER_INT);
    $precio = filter_var($_POST['precio_edit'], FILTER_SANITIZE_NUMBER_INT);
    $pulgadas = $_POST['pulgadas_edit'];
    $resolucion = filter_var(strtoupper($_POST['resolucion_edit']), FILTER_SANITIZE_STRING);
    $descripcion = filter_var($_POST['descripcion_edit'], FILTER_SANITIZE_STRING);

    /**  Datos de blob de la imagen 
     * $target_dir -> ruta de la imagen
     * $sanitize_nombre -> nombre de imagen limpia
     * $target_file -> Path de la imagen
     * $imagen_type -> Extension de la imagen
     * $imagen_size -> peso de la imagen
     */
    $imagen = $_FILES['imagen_edit']['name'];
    $target_dir = "../assets/img/";
    $sanitize_nombre = basename($imagen);
    $target_file = $target_dir . $sanitize_nombre;
    $imagen_type = pathinfo($target_file, PATHINFO_EXTENSION);
    $imagen_size = $_FILES['imagen_edit']['size'];



    if ($imagen != '') {

        // Validación de extensiones y peso permitidos de imagen
        if (($imagen_type != "jpg" && $imagen_type != 'png' && $imagen_type != 'jpeg') and $imagen_size > 0) {
            $errors[] = "Lo sentimos, sólo se permiten archivos JPG , JPEG, PNG";
        } else if ($imagen_size > 5242880) { //5242880 byte = 5MB
            $errors[] = "Lo sentimos, pero el archivo es demasiado grande. Selecciona logo de menos de 1MB";
        } else {

            // Final de validación
            if ($imagen_size > 0) {
                move_uploaded_file($_FILES['imagen_edit']['tmp_name'], $target_file);
                // Eliminando imagen anterios
                $id_producto = intval($_POST['id_edit']);
                $query = mysqli_query($con, "SELECT imagen FROM productos WHERE id = '" . $id_producto . "'");
                $result = mysqli_fetch_array($query);
                $sql = "UPDATE productos SET codigo='" . $codigo . "', marca='" . $marca . "', modelo='" . $modelo . "', peso='" . $peso . "', stock='" . $stock . "' , precio='" . $precio . "' , pulgadas='" . $pulgadas . "' , resolucion='" . $resolucion . "' , descripcion='" . $descripcion . "' , imagen='" . $imagen . "' WHERE id = '" . $id . "' ";
                if (mysqli_query($con, $sql)) {
                    $messages[] = 'Datos actaulizados correctamente';
                    unlink("../assets/img/" . $result[0]);
                } else {
                    $errors[] = 'Error al actualizar los datos';
                }
            }
        }
    } else {
        $sql = "UPDATE productos SET codigo='" . $codigo . "', marca='" . $marca . "', modelo='" . $modelo . "', peso='" . $peso . "', stock='" . $stock . "' , precio='" . $precio . "' , pulgadas='" . $pulgadas . "' , resolucion='" . $resolucion . "' , descripcion='" . $descripcion . "' WHERE id = '" . $id . "'";
        if (mysqli_query($con, $sql)) {
            $messages[] = 'Datos actaulizados correctamente';
        } else {
            $errors[] = 'Error al actualizar los datos';
        }
    }
}


if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
