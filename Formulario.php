<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    define("RECIPIENT_NAME", "CIM");
    define("RECIPIENT_ADDRESS", "info@cimasesoria.es");
    define("EMAIL_SUBJECT", "Contacto");

    $senderName = $senderEmail = $message = "";
    $errorName = $errorEmail = $errorMessage = "";
    $recipient = $headers = "";
    $success = false;
    $errors = false;

    // Sólo validamos si se ha enviado la página con un post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senderName = $_POST['name'];
        if (empty($senderName)) {
            $errorName = "Debe escribir su nombre";
        } else {
            $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
            if ($senderName == "") { // comprobamos que tras sanear no es vacío
                $errorName = "Debe escribir un nombre válido";
            }
        }
        $senderEmail = $_POST['email'];
        // Lee valores, los sanea y los valida
        if (empty($senderEmail)) {
            $errorEmail = "Debe escribir una dirección de correo";
        } else {
            $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
            if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
                $errorEmail = "La dirección de correo electrónica es incorrecta";
            }
        }
        $message = $_POST['message'];
        if (empty($message)) {
            $errorMessage = "Debe escribir un mensaje";
        } else {
            $message = filter_var($message, FILTER_SANITIZE_STRING);
            if ($message == "") { // comprobamos que tras sanear no es vacío
                $errorMessage = "Debe escribir un mensaje válido";
            }
        }
        $errors = !empty($errorEmail) || !empty($errorName) || !empty($errorMessage);
        // Si no hay errores, mandamos el correo
        if (!$errors) {
            $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
            $headers = "From: " . $senderName . " <" . $senderEmail . ">";
            $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);
        }
    }
    ?>

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

    <link href="css/ProyectoCIM.css" rel="stylesheet">

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

    <div class="container">
        <div class="text-center">
            <h1>Contacto</h1>
        </div>

        <form class="form-horizontal" id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"
              method="post" novalidate>
            <div class="form-group <?php if (!empty($errorName)) {
                echo "has-error";
            } ?>">
                <label class="col-sm-2 control-label" for="name">Nombre</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Escribe tu nombre" value="<?php echo $senderName; ?>" required
                    >

                    <?php
                    if (!empty($errorName)): ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-exclamation-sign"></span>
                            <?php echo $errorName; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group  <?php if (!empty($errorName)) {
                echo "has-error";
            } ?>">
                <label class="col-sm-2 control-label" for="email">Correo electrónico</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Escribe tu correo electrónico"
                           value="<?php echo $senderEmail; ?>"
                           required>

                    <?php
                    if (!empty($errorEmail)): ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-exclamation-sign"></span>
                            <?php echo $errorEmail; ?>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group  <?php if (!empty($errorName)) {
                echo "has-error";
            } ?>">
                <label class="col-sm-2 control-label" for="message">Mensaje</label>
                <div class="col-sm-10">
            <textarea class="form-control" rows="3" id="message" name="message"
                      placeholder="Escribe tu mensaje" required><?php echo $message; ?></textarea>
                    <?php
                    if (!empty($errorMessage)): ?>
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-exclamation-sign"></span>
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Enviar <span
                                class="glyphicon glyphicon-arrow-right"></span>
                    </button>
                    <button id="btnReset" type="reset" class="btn btn-default">Reiniciar</button>
                </div>
            </div>
        </form>

        <?php
        if (($_SERVER["REQUEST_METHOD"] == "POST") && !$errors):
        ?>
        <div class="container"></div>
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            if ($success):
                ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Mensaje validado</h2>
                    </div>
                    <div class="panel-body">
                        ¡Gracias por enviar su mensaje! Nos pondremos en contacto cuanto antes.
                    </div>
                </div>
                <?php
            else:
                ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h2 class="panel-title">Error en servidor</h2>
                    </div>
                    <div class="panel-body">
                        Lo sentimos, ha habido un problema al enviar su mensaje. Por favor, inténtelo de nuevo.
                    </div>
                </div>
                <?php
            endif;
            endif;
            ?>
        </div>
    </div>
    <!-- container -->
        <div class="container">
            <p class="text-muted">Volver a <a href="index.php">Página inicial</a></p>
        </div>
    <!-- Footer -->
    <footer>
        <?php include "template/footer.php" ?>
    </footer>
    <!-- JQuery -->
    <script>
        $(document).ready(function () {
            $("#btnReset").click(function () {
                $("#contactForm")[0].reset();
                $('input').attr("value", "");
                $("textarea").empty();
                // quita errores
                $('.form-group.has-error').removeClass('has-error');
                $("div.alert.alert-danger").remove();
            });
        });
    </script>
<?php include "template/scripts.php" ?>

</body>

</html>


<!-- /.container -->

