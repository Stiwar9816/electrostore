<?php
session_start();
include ('../helpers/formato_moneda.php');

$arreglo = $_SESSION['carrito'];
$total = 0;
$numero = 0;
for ($i = 0; $i < count($arreglo); $i++) {
	if ($arreglo[$i]['id'] == $_POST['id']) {
		$numero = $i;
	}
}
$arreglo[$numero]['stock'] = $_POST['stock'];
// money_format('%.0n', $total) .  "\n";
for ($i = 0; $i < count($arreglo); $i++) {
	$total = ($arreglo[$i]['precio'] * $arreglo[$i]['stock']) + $total;
}
$_SESSION['carrito'] = $arreglo;
echo moneda_cop($total);
