<?php
// Redirecionar todas las rutas bajo una url base dentro del proyecto
define('URL_BASE', '//'.$_SERVER['SERVER_NAME'].'/electrostore/');

if (isset($_GET['logout'])) {
    unset($_SESSION['privilegio']);
    unset($_SESSION['usuario']);
    session_destroy();
    header("location:" . URL_BASE . "index.php");
    exit();
}