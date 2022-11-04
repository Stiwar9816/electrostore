<?php
	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, "", DB_NAME);

    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
