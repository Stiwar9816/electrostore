<?php
$query_compras = mysqli_query($con, "SELECT * FROM compras");
$numero_venta = 0;
?>
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">Imagen</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Fecha de Compra</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        while ($row = mysqli_fetch_array($query_compras)) {
            echo '<tr>
						<td><img src="src/assets/img/' . $row['imagen'] . '" width="100px" heigth="100px" /></td>
						<td>' . $row['nombre'] . '</td>
						<td>' . $row['precio'] . '</td>
						<td>' . $row['cantidad'] . '</td>
						<td>' . $row['fecha_registro'] . '</td>
						<td>' . $row['subtotal'] . '</td>

					</tr>';
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th class="text-center">Imagen</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Fecha de Compra</th>
            <th class="text-center">Total</th>
        </tr>
    </tfoot>
</table>