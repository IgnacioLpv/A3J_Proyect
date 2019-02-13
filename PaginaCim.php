<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cimAsesoria</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS que se modifica-->
    <link href="css/PaginaEnvio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
    <?php include "template/menu.php" ?>

<!-- Imagen central con carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/empresa.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/empresa.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/empresa.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>

<!-- Page Content -->
<header id="Titulo">
    <p>CIM</p>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <p>
                CIM nace como un proyecto de empresarios y para empresarios. Pretende unir el conocimiento de profesionales de diferentes ámbitos de actuación,
                todos con más de 25 años de experiencia en sus campos de especialidad, con el objetivo de acompañar a la pequeña y mediana empresa a superar
                determinados retos que le acontecen a lo largo de su trayectoria empresarial, así como a los nuevos emprendedores en el momento en que deciden
                acometer su proyecto. Somos empresarios con una dilatada trayectoria dispuestos a ayudarte a gestionar tus necesidades aportando la experiencia
                acumulada, gestionando contigo el día a día y ofreciéndote soluciones basadas en casos reales ya vividos.<br>
                CIM no es por tanto una consultora tradicional. No prendendemos solo aportar valor. Nuestra misión es trabajar contigo, codo a codo,
                hasta conseguir resolver tu problema, desarrollar tu negocio, alcanzar contigo las metas que nos propongamos
            </p>
        </div>
        <div class="col-xs-4">
            <p>
                <img class="position_content" src="images/logo3.png"/></div>

        </p>
        </div>
    </div>
</div>
<!-- Footer -->
<footer>
    <?php include "template/footer.php" ?>
</footer>

<?php include "template/scripts.php" ?>

</body>

</html>