<!DOCTYPE html>

<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Figuesep</title>
    <meta name="Author" content="" />

    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/lightbox.min.css" rel="stylesheet" />
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
            <img src="../imagenes/slide/gal1.jpg" alt="slider-1" />
        </div>
        <div class="item">
            <img src="../imagenes/slide/gal2.jpg" alt="slider-1" />
        </div>
        <div class="item">
            <img src="../imagenes/slide/gal3.jpg" alt="slider-1" />
        </div>
        <div class="item">
            <img src="../imagenes/slide/gal4.jpg" alt="slider-1" />
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
                    <small> Para más información, accede a nuestra área de Servicios  </small>
                </h4>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-car fa-3x"></i>
                <span class="glyphicon glyphicon-tint"></span>
                <p>Lavado Automotriz</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-wrench fa-3x"></i>
                <p>Reparación y Mantención en toda el área Eléctrica de tu Vehículo</p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                <i class="fa fa-cc-visa fa-3x"></i>
                <p>Venta de Accesorios y Repuestos para tu Vehículo</p>
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
            <a href="../imagenes/galeriaInicio/276775621_439.jpg" data-lightbox="image-1" data-title="Gran Variedad de Insumos Eléctricos">
            <img src="../imagenes/galeriaInicio/276775621_439.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/556242.jpg" data-lightbox="image-1" data-title="Reparación de Arranques">
            <img src="../imagenes/galeriaInicio/556242.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/audio2.jpg" data-lightbox="image-1" data-title="Venta e Intalación de Audio para tu Vehículo">
            <img src="../imagenes/galeriaInicio/audio2.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/marcas.jpg" data-lightbox="image-1" data-title="Repuestos y Accesorios para muchas Marcas">
            <img src="../imagenes/galeriaInicio/marcas.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>
    </div>
        <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/parts2.jpg" data-lightbox="image-1" data-title="Venta e Instalación de Alarmas">
            <img src="../imagenes/galeriaInicio/parts2.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/faros.jpg" data-lightbox="image-1" data-title="Gran Stock de Faros y Ampolletas">
            <img src="../imagenes/galeriaInicio/faros.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/img.jpg" data-lightbox="image-1" data-title="Cables de Bujia de Alta y Baja Gama">
            <img src="../imagenes/galeriaInicio/img.jpg" alt="wall" class="img-responsive img-rounded"></a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="../imagenes/galeriaInicio/teaserbox_5225130.png" data-lightbox="image-1" data-title="Amplia variedad de Conectores">
            <img src="../imagenes/galeriaInicio/teaserbox_5225130.png" alt="wall" class="img-responsive img-rounded"></a>
        </div>

    </div>

</div>

</section>

<section class="sobre_nosotros">

<div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
          <span class="lead"><i class="fa fa-users fa-1g"></i>&nbsp;Sobre Nosotros</span>
      </div>
      <hr><hr>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Misión <br/><hr>
                <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>
            </h4>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Personal <br/><hr>
                <small> Dueño y Representante Legal Sr. Osvaldo Figueroa Vera <br>Profesional en Electridad Automotriz  </small>
            </h4>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 class="text-center">
                Visión <br/><hr>
                <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias, porro consequatur  </small>
            </h4>
        </div>
    </div>
</div>

</section>

<footer>
  <!-- <div id="fb-root"></div> -->
<center>
  <div class="fb-like" data-href="http://proinforla.com/figuesep/principal/index.php" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="" data-share="true"></div>
</center>
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
    lightbox.option({
      'resizeDuration': 1000,
      'wrapAround': true,
      'fadeDuration':1000,
      'maxWidth':1024
    })
</script>
<!-- este script discrimina tipo de usuario (recibe de validarSesion.php) -->
<?php
require_once'../comun/comun.php';
login();
?>
</body>

</html>
