<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./src/assets/img/logo.png" alt="Logo Electro TV" width="32" height="32" class="d-inline-block align-text-top" />
            Electro TV
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_index;?>" aria-current="page" href="./index.php">
                        <i class="fa-solid fa-house"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_conocenos;?>" href="./conocenos.php"><i class="fa-solid fa-user"></i> Conocenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_tienda;?>" href="./tienda.php"><i class="fa-solid fa-shop"></i> Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_compras;?>" href="./admin_compras.php"><i class="fa-solid fa-clock-rotate-left"></i> Ultimas compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_productos;?>" href="./admin_products.php"><i class="fa-solid fa-boxes-stacked"></i> Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_carrito;?>" href="./carrito.php"><i class="fa-solid fa-cart-shopping"></i> Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $active_sesion;?>" href="./login.php"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-right-to-bracket"></i> Cerrar sesión</a>                    
                </li>
            </ul>
        </div>
    </div>
</nav>