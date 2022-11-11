<?php $query_productos = mysqli_query($con, "SELECT * FROM productos ORDER BY precio asc LIMIT 6"); ?>
<div class="align-center">
    <div class="row mt-5">
    <?php
        while ($row = mysqli_fetch_array($query_productos)) {
            echo '
            <div class="col-sm-4 py-3 col-md-4">
            <div class="card">
                <img src="src/assets/img/' . $row['imagen'] . '" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">' . $row['marca'] . ' ' . $row['resolucion'] . ' ' . $row['pulgadas'] . '</h5>
                    <p class="card-text">$' . $row['precio'] . '</p>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Detalles</a>
                    <a href="#" class="btn btn-success"><i class="fa-solid fa-cart-plus"></i> Añadir</a>
                </div>
            </div>
        </div>';
        }
        ?>
    </div>
</div>