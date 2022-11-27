<?php $query_productos = mysqli_query($con, "SELECT * FROM productos"); ?>
<?php
$total = 0;
if (isset($_SESSION['carrito'])) {
    $datos = $_SESSION['carrito'];
    $total = 0;
    $row = 0;
?>
    <table id="carrito" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">Imagen</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Modelo</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <div id="mensaje"></div>
            <?php
            while ($row < count($datos)) {
                $subTotal = $datos[$row]['stock'] * $datos[$row]['precio'];
                echo '<tr>
            <td><img src="src/assets/img/' . $datos[$row]['imagen'] . '" width="100px" heigth="100px" /></td>
            <td>' . $datos[$row]['marca'] . '</td>
            <td>' . $datos[$row]['modelo'] . '</td>
            <td>' . moneda_cop($datos[$row]['precio']) . '</td>
            <td> <input type="number" min="1" value="' . $datos[$row]['stock'] . '"data-precio="' . $datos[$row]['precio'] . '" data-id="' . $datos[$row]['id'] . '" id="cantidad"></td>
            <td class="sub_total">' . moneda_cop($subTotal) . '</td>
            <td>
            <a href="carrito.php" class="btn btn-danger " onclick="eliminar_elemento(' . $datos[$row]['id'] . ')"><i class="eliminar fa-solid fa-trash"></i> </a>
            </td>
            </tr>';
                $total = ($datos[$row]['stock'] * $datos[$row]['precio']) + $total;
                $row++;
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th class="text-center">Imagen</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Modelo</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Acciones</th>
            </tr>
        </tfoot>
    </table>
<?php
} else {
    echo '<div class="carrito text-center py-5">
            <h4 class="text-center" No hay productos añadidos</h4>
        </div>';
}
echo '<h1 class="total text-center" id="total">Total: ' . moneda_cop($total) . '</h1>
<div class="text-center py-5">
        <a href="tienda.php" class=" text-center btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Ver catalogo</a>
        <a href="carrito.php" class=" text-center btn btn-success"><i class="fa-solid fa-rotate"></i> Actualizar</a>
    </div>';
if ($total != 0) {
    echo '
    <div class="text-center">
    <a data-bs-toggle="modal" data-bs-target="#datos_usuario" class="text-center btn btn-primary"><i class="comprar fa-solid fa-store" ></i> Comprar</a>
    </div>
    ';
}
?>