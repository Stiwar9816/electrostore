<?php
session_start();
$arreglo = $_SESSION['carrito'];

for ($i = 0; $i < count($arreglo); $i++) {
    if ($arreglo[$i]['id'] != $_POST['id']) {
        $datosNuevos[] = array(
            'id' => $arreglo[$i]['id'],
            'marca' => $arreglo[$i]['marca'],
            'precio' => $arreglo[$i]['precio'],
            'imagen' => $arreglo[$i]['imagen'],
            'modelo' => $arreglo[$i]['modelo'],
            'stock' => $arreglo[$i]['stock']
        );
    }
}
if (isset($datosNuevos)) {
    $_SESSION['carrito'] = $datosNuevos;
} else {
    unset($_SESSION['carrito'][0]);
    echo '0';
}
