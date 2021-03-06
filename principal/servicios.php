<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Servicios</title>
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
<!--FinalMenu-->

<main class="contenido-principal"><!--contenido-principal-->
<div class="container">
    <div class="row">

            <h4 class="lead text-center">
                <br>

                Nuestros Servicios <br>

                <small>Ofrecemos Servicios de la mejor Calidad y en tiempo record de Eficiencia.</small>
            </h4>

            <hr>

            <!-- <div class="clearfix"></div> -->

            <div class="col-xs-12 col-sm-6 col-md-4 col-xs-offset-1 col-sm-offset-0 text-center box-servicios">

                <div class="icon-cuadrado">
                    <i class="fa fa-clone fa-3x"></i>
                </div>
                <div class="contenido-servicio">
                    <span class="lead">Lavado Automotriz</span> <br>
                    <a class="btn btn-default" data-toggle="modal" href='#modal-srv-1'>Ver M&aacute;s</a>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-xs-offset-1 col-sm-offset-0 text-center box-servicios">

                <div class="icon-cuadrado">
                    <i class="fa fa-clone fa-3x"></i>
                </div>
                <div class="contenido-servicio">
                    <span class="lead">Mantención Electrica</span> <br>
                    <a class="btn btn-default" data-toggle="modal" href='#modal-srv-2'>Ver M&aacute;s</a>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-xs-offset-1 col-sm-offset-0 text-center box-servicios">

                <div class="icon-cuadrado">
                    <i class="fa fa-clone fa-3x"></i>
                </div>
                <div class="contenido-servicio">
                    <span class="lead">Venta de Accesorios</span> <br>
                    <a class="btn btn-default" data-toggle="modal" href='#modal-srv-3'>Ver M&aacute;s</a>
                </div>

            </div>
        </div>
    </div>
</main><!--contenido-principal-->

<!--section modal-->


<div class="modal fade bs-modal-lg" id="modal-srv-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-10">
                        Servicio de Lavado Automotriz.
                    </div>
                    <div class="col-xs-2">
                         <a data-dismiss="modal"><i class="fa fa-close fa-2x pull-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <img src="../imagenes/servicios/lavado.jpg" class="img-responsive img-rouded" alt="image modal">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptate non voluptas nobis magnam reiciendis exercitationem sapiente a sunt aut optio libero corporis quisquam tempora possimus nesciunt consectetur, voluptatem aspernatur.
                        </p>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

<div class="modal fade bs-modal-lg" id="modal-srv-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-10">
                        Servicio de Mantención Automotriz
                    </div>
                    <div class="col-xs-2">
                         <a data-dismiss="modal"><i class="fa fa-close fa-2x pull-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <img src="../imagenes/servicios/mantencion.jpg" class="img-responsive img-rouded" alt="image modal">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptate non voluptas nobis magnam reiciendis exercitationem sapiente a sunt aut optio libero corporis quisquam tempora possimus nesciunt consectetur, voluptatem aspernatur.
                        </p>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

<div class="modal fade bs-modal-lg" id="modal-srv-3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-10">
                        Venta de Accesorios y Repuestos
                    </div>
                    <div class="col-xs-2">
                         <a data-dismiss="modal"><i class="fa fa-close fa-2x pull-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <img src="../imagenes/servicios/venta.jpg" class="img-responsive img-rouded" alt="image modal">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptate non voluptas nobis magnam reiciendis exercitationem sapiente a sunt aut optio libero corporis quisquam tempora possimus nesciunt consectetur, voluptatem aspernatur.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!--section modal-->

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
<?php
require_once'../comun/comun.php';
login();
?>
</body>

</html>
