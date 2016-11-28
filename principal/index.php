<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Titulo de La Pagina</title>
    <meta name="Author" content="nvm" />

    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/lightbox.min.css" rel="stylesheet" />
    <link href="../css/normalize.css" rel="stylesheet" />

    <!-- > Bootstrap v3.3.7 and Font Awesome v4.6.3 < -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <!--MENU-->
  <?php
  require_once'../comun/comun.php';
  menuPublico();
  ?>
  <!--FinalMenu-->

  <!--MODAL-->



<!-- END MODAL-->

<section class="carousel-informacion">


<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
        <li data-target="#carousel-id" data-slide-to="3" class=""></li>


    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="../imagenes/slide/gal1-min.jpg." alt="slider-1" />
            <div class="container">
                <!--<div class="carousel-caption">
                    <h1>Texto </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque doloribus, veritatis dolor odit minus nemo ipsum commodi amet aspernatur cumque necessitatibus voluptates enim sapiente recusandae autem sequi suscipit? Dignissimos!</p>

                    <button type="button" class="btn btn-success">Enviar</button>

                </div>-->
            </div>
        </div>
        <div class="item">

            <img src="../imagenes/slide/gal2-min.jpg" alt="slider-1" />

            <div class="container">
                <!--<div class="carousel-caption">
                    <h1>Texto </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque doloribus, veritatis dolor odit minus nemo ipsum commodi amet aspernatur cumque necessitatibus voluptates enim sapiente recusandae autem sequi suscipit? Dignissimos!</p>

                    <button type="button" class="btn btn-success">Enviar</button>

                </div>-->
            </div>
        </div>
        <div class="item">

            <img src="../imagenes/slide/gal3-min.jpg" alt="slider-1" />

            <div class="container">
                <!--<div class="carousel-caption">
                    <h1>Texto </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque doloribus, veritatis dolor odit minus nemo ipsum commodi amet aspernatur cumque necessitatibus voluptates enim sapiente recusandae autem sequi suscipit? Dignissimos!</p>

                <button type="button" class="btn btn-success">Enviar</button>

                </div>-->
            </div>
        </div>
        <div class="item">

            <img src="../imagenes/slide/gal4-min.jpg" alt="slider-1" />

            <div class="container">
                <!--<div class="carousel-caption">
                    <h1>Texto </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eaque doloribus, veritatis dolor odit minus nemo ipsum commodi amet aspernatur cumque necessitatibus voluptates enim sapiente recusandae autem sequi suscipit? Dignissimos!</p>

                <button type="button" class="btn btn-success">Enviar</button>

                </div>-->
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

</section>

<aside class="servicios">
    <div class="container">

        <div class="row">

            <div class="col-xs-12">
                <h4 class="text-center">
                    Nuestros Servicios <br/>

                    <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>

                </h4>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-car fa-3x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti fuga sequi atque assumenda maiores, nesciunt consectetur quas error iure sit excepturi fugit voluptatum cupiditate, impedit officia soluta itaque commodi voluptatibus.</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-wrench fa-3x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti fuga sequi atque assumenda maiores, nesciunt consectetur quas error iure sit excepturi fugit voluptatum cupiditate, impedit officia soluta itaque commodi voluptatibus.</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-music fa-3x"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti fuga sequi atque assumenda maiores, nesciunt consectetur quas error iure sit excepturi fugit voluptatum cupiditate, impedit officia soluta itaque commodi voluptatibus.</p>
            </div>

        </div>

    </div>
</aside>

<section class="galeria">

<div class="container">

    <div class="row">

        <div class="col-xs-12 text-center">
            <span class="lead"><i class="fa fa-picture-o fa-1g"></i>&nbsp;Galeria</span>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/276775621_439.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/276775621_439.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/556242.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/556242.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/audio2.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/audio2.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/marcas.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/marcas.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>
    </div>
        <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/parts2.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/parts2.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/faros.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/faros.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/img.jpg" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/img.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/teaserbox_5225130.png" data-lightbox="image-1" data-title="Informacion sobre la imagen">
            <img src="../imagenes/galeriaInicio/teaserbox_5225130.png" alt="wall" class="img-responsive img-rounded"></a>
        </div>

    </div>

</div>

</section>

<section class="sobre_nosotros">

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Nuestros Servicios <br/>

                <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>

            </h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Nuestros Servicios <br/>

                <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>

            </h4>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Nuestros Servicios <br/>

                <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>

            </h4>
        </div>

    </div>

</div>

</section>

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
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/lightbox.min.js"></script>
<!-- > js agregados por nosotros < -->
<script src="../js/validar_sesion.js"></script>

<script>
    lightbox.option({
      'resizeDuration': 1000,
      'wrapAround': true,
      'fadeDuration':1000,
      'maxWidth':1024
    })
</script>
//este script discrimina tipo de usuario (recibe de validarSesion.php)//
<script>
    $('#inicio_sesion').submit(function(){
        event.preventDefault();
        $.ajax({
            url:"../comun/validarSesion.php",
            data:$('#inicio_sesion').serialize(),
            success:function(respuesta){

            if(respuesta == '1'){
            window.location = 'indexAdmin.php';
            }else if(respuesta == '2'){
                window.location = 'perfil-usuario.php';

            }else{
                 alert("Incorrecto");
            }
        }

        });
    });
</script>
</body>

</html>
