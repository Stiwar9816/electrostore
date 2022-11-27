<?php $query_productos = mysqli_query($con, "SELECT * FROM productos"); ?>
<table id="agregar_productos" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Imagen</th>
            <th class="text-center">Ean</th>
            <th class="text-center">Marca</th>
            <th class="text-center">Modelo</th>
            <th class="text-center">Peso</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Pulgadas</th>
            <th class="text-center">Resolucion</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        while ($row = mysqli_fetch_array($query_productos)) {
            echo '<tr>
            <td id="codigo_id">' . $row['id'] . '</td>
            <td><img src="src/assets/img/' . $row['imagen'] . '" width="100px" heigth="100px" /></td>
            <td>' . $row['codigo'] . '</td>
            <td>' . $row['marca'] . '</td>
            <td>' . $row['modelo'] . '</td>
            <td>' . $row['peso'] . '</td>
            <td>' . $row['stock'] . '</td>
            <td>' . moneda_cop($row['precio']) . '</td>
            <td>' . $row['pulgadas'] . '</td>
            <td>' . $row['resolucion'] . '</td>
            <td>' . $row['descripcion'] . '</td>
            <td>
            <!-- Button update modal -->
            <button type="button" class="btn btn-primary btn-sm" data-id="' . $row['id'] . '" data-codigo="' . $row['codigo'] . '" data-marca="' . $row['marca'] . '" data-peso="' . $row['peso'] . '" data-descripcion="' . $row['descripcion'] . '" data-resolucion="' . $row['resolucion'] . '" data-pulgadas="' . $row['pulgadas'] . '"  data-precio="' . $row['precio'] . '"  data-modelo="' . $row['modelo'] . '" data-stock="' . $row['stock'] . '" data-bs-toggle="modal" data-bs-target="#updateProducts">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <!-- End Button update modal -->
            <a href="#" class="btn btn-danger btn-sm" onclick="eliminar_producto(' . $row['id'] . ')"><i class="fa-solid fa-trash"></i> </a>
            </td>
            </tr>';
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Imagen</th>
            <th class="text-center">Ean</th>
            <th class="text-center">Marca</th>
            <th class="text-center">Modelo</th>
            <th class="text-center">Peso</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Pulgadas</th>
            <th class="text-center">Resolucion</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Acciones</th>
        </tr>
    </tfoot>
</table>