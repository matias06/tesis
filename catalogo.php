<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<!--#####-nvm-#####-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Productos</title>
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
require_once'admin/comun/comun.php';
menuPublico();
?>

<!-- END MODAL-->

<main class="contenido-principal"><!--contenido-principal-->
<div class="container">
    <div class="row">

        <h4 class="lead text-center titulo-catalogo">
            Catalogo de Productos
        </h4>

         <div class="col-xs-12 contenido-categoria cb2"> <!--contenido-principal-->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <span class="lead titulo-categoria text-center c2">Audio</span>

              <hr>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="catalogo_2.php">Parlantes</a></li>
                <li><a href="catalogo_2.php">Conectores</a></li>
                <li><a href="catalogo_2.php">Antenas</a></li>
            </ul>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-9">
                <br>
                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Audio/bass-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>     

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Audio/20161018_143957-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>     

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Audio/20161018_152018-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>         
            </div>

        </div><!--final-contenido-x-categoria-->

        <div class="col-xs-12 contenido-categoria cb1"><!--contenido-x-categoria-->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <span class="lead titulo-categoria text-center c1">Iluminación</span>

              <hr>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="catalogo_2.php">Ampolletas</a></li>
                <li><a href="catalogo_2.php">Led</a></li>
                <li><a href="catalogo_2.php">Focos</a></li>
            </ul>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-9">
                <br>
                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha2.php">
                        <img src="imagenes/productos/Iluminacion/20161018_144046-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>     

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha2.php">
                        <img src="imagenes/productos/Iluminacion/20161018_152057-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>    

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha2.php">
                        <img src="imagenes/productos/Iluminacion/20161018_150159-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>       
                
            </div>

        </div><!--final-contenido-x-categoria-->


        <div class="col-xs-12 contenido-categoria cb3"><!--contenido-x-categoria-->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <span class="lead titulo-categoria text-center c3">Tuning</span>

              <hr>

            <ul class="nav nav-pills nav-stacked">
                <li><a href="catalogo_2.php">Accesorios Interior</a></li>
                <li><a href="catalogo_2.php">Accesorios Exterior</a></li>
                <li><a href="catalogo_2.php">Stickers</a></li>
            </ul>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-9">
                <br>

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Tuning/20161018_151206-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>     

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Tuning/20161018_150633-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>    

                <div class="well well-cw col-xs-12 col-sm-6 col-md-4">
                    <a href="ficha.php">
                        <img src="imagenes/productos/Tuning/20161018_145516-min.jpg" class="img-responsive" alt="">
                        <span>nombre del producto</span>
                    </a>
                </div>           
                
            </div>

        </div><!--final-contenido-x-categoria-->

    </div>
</div>
</main><!--contenido-principal-->

<footer>
    
<?php
require_once'admin/comun/comun.php';
footerPublico();
?>
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
