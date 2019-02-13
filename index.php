<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ignacio López-Perea">

    <title>cimAsesoria</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS que se modifica-->
    <link href="css/half-slider.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
            <div class="fill" style="background-image:url('images/seleccion1.jpg');"></div>
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/puente.jpg');"></div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('images/business.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->

</header>
<div class="eslogan">
    <h2>RESOLVEMOS EL PRESENTE. CONSTRUIMOS EL FUTURO</h2>
</div>
<!-- Page Content -->
<div id="tituloContenido">
    <p>SERVICIOS</p>
    <div class="imagenTitulo"><img src="images/triangulos.png"></div>
</div>
<div class="container">
    <div class="Servicios">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio1" href="PaginaGestion.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/economico_financiero.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Gestión Economico-<br>Financiera</h2>
                    <a href="PaginaGestion.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio2" href="PaginaEmprendedores.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/emprendedor.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Ayuda <br>al emprendedor</h2>
                    <a href="PaginaEmprendedores.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio3" href="PaginaNegocios.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/negocio.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Desarrollo <br>de negocios</h2>
                    <a href="PaginaNegocios.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio4" href="PaginaFinances.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/finanzas.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Corporate <br> finances</h2>
                    <a href="PaginaFinance.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio5" href="PaginaInternacional.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/internacional.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Salida <br>Internacional</h2>
                    <a href="PaginaInternacional.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="Servicio6" href="PaginaPersonas.php"></div>
                <div class="product-info">
                    <div align=center><img src="images/gestion%20de%20personas.jpg" width="250px" height="156px"></div>
                    <h2 class="product-name">Gestión <br> de personas</h2>
                    <a href="PaginaPersonas.php"><button type="button" class="btn btn-primary btn-lg btn-block">Leer más</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Esto es la alarma de cookies-->
<div id="overbox3">
    <div id="infobox3">
        <p>Esta web utiliza cookies privadas. Si continúas aceptas su uso.
            <a href="politica-privacidad.php">Más info</a>
            <a onclick="aceptar_cookies();" style="cursor:pointer;">Aceptar</a></p>
    </div>
</div>
<!-- Footer -->
<footer>
    <?php include "template/footer.php" ?>
</footer>

    <?php include "template/scripts.php" ?>
</body>

</html>
