<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<!--#####-nvm-#####-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Titulo de La Pagina</title>
    <meta name="Author" content="nvm" />

    <!-- > css generales < -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/normalize.css" rel="stylesheet" />

    <!-- > Bootstrap v3.3.7 and Font Awesome v4.6.3 < -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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
require_once'comun/comun.php';
menuPublico();
?>
<!-- END MODAL-->

<main class="contenido-principal"><!--contenido-principal-->
<div class="container">
    <div class="row">
        <hr>
        <div class="col-xs-12 contenido-categoria"> <!--contenido-x-categoria-->

            <div class="col-xs-12 col-sm-6 col-md-3"><!--menu-categoria-->
            <hr>
            <div class="col-xs-12">
              <span class="lead titulo-categoria text-center c2">Ficha de Producto</span>

              <hr>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="catalogo_2.php">Volver a Categoría</a></li>
                    <li><a href="catalogo.php">Volver a Catálogo</a></li>
                    <!--<li><a href="catalogo_2.html">Sub_categoria</a></li>-->
                </ul>

              <hr>
            </div>

            <!--<div class="col-xs-12">
              <span class="lead titulo-categoria text-center c3">Categoria 2</span>

                <hr>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                </ul>

                <hr>
            </div>

            <div class="col-xs-12">
              <span class="lead titulo-categoria text-center c1">Categoria 3</span>

                <hr>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                    <li><a href="catalogo_2.html">Sub_categoria</a></li>
                </ul>

                <hr>

            </div>-->

            </div><!--final-menu-categoria-->

            <div class="col-xs-12 col-sm-6 col-md-9"><!--contenido-ficha-producto-->

                <br>

            <div class="ficha">

                <h4 class="lead ficha-titulo">SubWoofer 1400 watts</h4>

                <div class="ficha-imagen">
                    <img src="imagenes/productos/Audio/bass.jpg" alt="wall" class="img-responsive">
                </div>

                <div class="ficha-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, distinctio delectus. Natus, eaque tempore. Voluptates quaerat, praesentium aut ad totam harum sapiente expedita qui natus. Ab aliquid officia deserunt molestiae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, distinctio delectus. Natus, eaque tempore. Voluptates quaerat, praesentium aut ad totam harum sapiente expedita qui natus. Ab aliquid officia deserunt molestiae.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, distinctio delectus. Natus, eaque tempore. Voluptates quaerat, praesentium aut ad totam harum sapiente expedita qui natus. Ab aliquid officia deserunt molestiae.
                </div>

            </div>


            </div><!--final-contenido-ficha-producto-->

        </div> <!--final-contenido-principal-->

    </div>
</div>
</main><!--contenido-principal-->

<footer>

</footer>
<div class="sub_footer">
    <span>&copy;Todos Los Derechos Reservados</span>
</div>
<!-- > js importados < -->
<!-- > jquery antes de bootstrap para que funcione > -->
<script src="js/jquery.min.js"></script><!--version v1.12-->
<script src="js/bootstrap.min.js"></script>

<!-- > js agregados por nosotros < -->
<script src="js/main.js"></script>
<script src="js/validar_sesion.js"></script>
<script>
    $('#inicio_sesion').submit(function(){
        event.preventDefault();
        $.ajax({
            url:"admin/comun/validarSesion.php",
            data:$('#inicio_sesion').serialize(),
            success:function(respuesta){

            if(respuesta == '1'){
            window.location = 'admin/principal/indexAdmin.php';
            }else if(respuesta == '2'){
                window.location = '#';

            }else{
                 alert("Incorrecto");
            }
        }

        });
    });
</script>

</body>

</html>
