<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electro TV</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- Kit Icons FontAwesome -->
    <script src="https://kit.fontawesome.com/a239af1c0c.js" crossorigin="anonymous"></script>
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="./src/assets/css/style.css" />
</head>

<body>
    <!-- Navbar -->
    <?php include_once('./src/components/navbar.php') ?>
    <!-- End Navbar -->

    <div class="container">
        <!-- Banner -->
        <?php include_once('./src/components/banner.php') ?>
        <!-- End Banner -->

        <!-- Info Papge -->
        <h2 class="text-center pt-4 title__conocenos">Quiénes Somos</h2>
        <p>
            La misión del negocio es brindar un servicio personalizado a los clientes,
            permitiendo que los mismos encuentren la solución a los problemas que otros negocios del rubro, no pueden o bien no están dispuestos a dar,
            logrando de esta manera la confianza que le permitió mantenerse durante tantos años en el mercado.
        </p>
        <p>
            La filosofía del negocio es mantener un buen servicio de venta en la ciudad,
            personalizado, profesional, donde el cliente tenga una respuesta inmediata al problema de su electrodoméstico,
            garantizando una buena venta de mayor calidad, en el menor tiempo posible.
        </p>

        <h2 class="text-center pt-4 title__conocenos">Qué hacemos</h2>
        <p>Electro TV, ofrece un servicios integrales de Electrónica , telefonía, instrumental,contando para ello con la constante actualización y capacitación en las últimas tecnologías y las más modernas marcas.</p>
        <p>Cámaras Digitales, TV a TRC, pantallas planas Plasma, TFT, LCD, audio, vídeo, electrodomésticos, telefonía, en todas las marcas.</p>

        <h2 class="text-center pt-4 title__conocenos">Nuestro Objetivo</h2>
        <p>Es poder brindar a nuestros clientes un lugar en la ciudad donde pueda confiar la compra de sus aparatos audio visuales,
            encargándonos del servicio de venta, brindar buenos productos originales y garantizar un buen servicio en los productos brindados.
            Con atención personalizada, para que el cliente se vaya conforme con en buen servicio de nuestra página, ganando además un amigo en nuestra empresa.
        </p>

        <h2 class="text-center pt-4 title__conocenos">Yeiler Mosquera Maturana</h2>
        <p class="text-center">Estudiante de ingenieria de sistema con una dilatada experiencia en desarrollo de aplicaciones web con herramientas libres. </p>

        <h2 class="text-center pt-4 title__conocenos">Didier Alexander Mena</h2>
        <p class="text-center">Estudiante de ingenieria de sistema con una dilatada experiencia en desarrollo de aplicaciones web con herramientas libres. </p>
        <!-- End Info Page -->

        <!-- Footer -->
        <?php include_once('./src/components/footer.php') ?>
        <!-- End Footer -->
    </div>

</body>

</html>