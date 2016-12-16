<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Productos</title>
    <meta name="Author" content="" />

    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/normalize.css" rel="stylesheet" />

    <!-- > Bootstrap v3.3.7 and Font Awesome v4.6.3 < -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
<!--MENU-->
<?php
require_once'../comun/comun.php';
menuPublico();
?>
<!--Final Menu-->

<!--contenido-principal-->
<main class="contenido-principal">
<div class="container">
        <h4 class="lead text-center titulo-catalogo">
            Catalogo de Productos
        </h4>
        <?php
        require_once'../comun/catalogo.php';
        catalogo();
        ?>
</div>
</main>
              <!--contenido-principal-->
<footer>

<?php
require_once'../comun/comun.php';
footerPublico();
?>
</footer>
<div class="sub_footer">
    <span>&copy;Todos Los Derechos Reservados</span>
</div>
<!-- > js importados < -->
<!-- > jquery antes de bootstrap para que funcione > -->
<script src="../js/jquery.min.js"></script><!--version v1.12-->
<script src="../js/bootstrap.min.js"></script>

<!-- > js agregados por nosotros < -->
<script src="../js/main.js"></script>
<script src="../js/validar_sesion.js"></script>
<!--Modal de Login-->
<?php
require_once'../comun/comun.php';
login();
?>
<!--Final Modal-->
</body>

</html>
