<?php $query_productos = mysqli_query($con, "SELECT * FROM productos"); ?>
<table id="example" class="table table-striped" style="width:100%">
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
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        while ($row = mysqli_fetch_array($query_productos)) {
            echo '<tr>
            <td>' . $row['id'] . '</td>
            <td><img src="src/assets/img/' . $row['imagen'] . '" width="100px" heigth="100px" /></td>
            <td>' . $row['codigo'] . '</td>
            <td>' . $row['marca'] . '</td>
            <td>' . $row['modelo'] . '</td>
            <td>' . $row['peso'] . '</td>
            <td>' . $row['stock'] . '</td>
            <td>' . $row['precio'] . '</td>
            <td>' . $row['pulgadas'] . '</td>
            <td>' . $row['resolucion'] . '</td>
            <td>
            <!-- Button update modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateProducts">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <!-- End Button update modal -->
            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i> </a>
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
            <th class="text-center">Acciones</th>
        </tr>
    </tfoot>
</table>