<?php 
    if (!isset($_SESSION['usuario']) || $_SESSION['privilegio'] != 1) {
        header("location:" . URL_BASE . "index.php");
        exit();
    }
    