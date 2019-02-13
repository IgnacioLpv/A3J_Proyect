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
<nav>
    <?php include "template/menu.php" ?>
</nav>

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
    <p>Gestión de Personas</p>
</header>
<div class="container">
    <div class="row">
        <div class="col-xs-8">
            <p>
                <img src="images/checked.png">  Gestión y administración integral de los RRHH.<br>
                <img src="images/checked.png">  Diseño y definición del documento de cultura corporativa.<br>
                <img src="images/checked.png">  Diseño de las políticas de gestión directiva del detalle.<br>
                <img src="images/checked.png">  Desarrollo de las políticas y normas internas de la empresa.<br>
                <img src="images/checked.png">  Gestión de las políticas salariales. Negociación con los interlocutores sociales.<br>
                <img src="images/checked.png">  Implantación de sistemas de evaluación del desempeño.<br>
                <img src="images/checked.png">  Planes de sucesión. Protocolos y pactos de accionistas.<br>
                <img src="images/checked.png">  Análisis del potencial directivo.<br>
                <img src="images/checked.png">  Gestión de los planes de formación.<br>
                <img src="images/checked.png">  Diagnosis del clima laboral.<br>
                <img src="images/checked.png">  Programas de coaching directivo.<br>
                <img src="images/checked.png">  Pertenencia a comités de dirección.<br>
                <img src="images/checked.png">  Cursos de formación directiva.<br>
                <img src="images/checked.png">  Procesos de selección de personal.
            </p>
        </div>
        <div class="col-xs-4">
            <img src="images/gestion%20de%20personas.jpg" width="250px" height="156px">
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