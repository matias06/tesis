<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registro</title>
    <meta name="Author" content="" />

    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/normalize.css" rel="stylesheet" />
    <link href="../css/owl.carousel.css" rel="stylesheet" />
    <link href="../css/owl.carousel.theme.default.min.css" rel="stylesheet" />

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

<!-- END MODAL-->

<main class="contenido-principal"><!--contenido-principal-->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-3 form-reg">

            <form id="registro" name="registro" method="POST" role="form">
                <legend>Registrate</legend>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="Run">Run</label>
                    <input type="text" class="form-control" id="txt_run" name="txt_run" placeholder="Ej.11111111-1">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="password">Contrase&ntilde;a</label>
                    <input type="password" class="form-control" id="txt_password"  name="txt_password" placeholder="Contrase&ntilde;a">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="email">Telefono de Contacto</label>
                    <input type="text" class="form-control" id="txt_telefono" name="txt_telefono" placeholder="989052072">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="email">Corre Electronico</label>
                    <input type="text" class="form-control" id="txt_correo" name="txt_correo" placeholder="x ej: correo@dominio.cl">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>

            </form>

        </div>

      <!-- <div class="col-xs-12 col-sm-6 col-md-5 form-reg">

            <form action="#" method="POST" role="form">
                <legend>Iniciar Sesion</legend>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="nombre">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <label for="password">Contrase&ntilde;a</label>
                    <input type="text" class="form-control" id="password" placeholder="Contrase&ntilde;a">
                </div>

                <div class="form-group col-xs-12 col-sm-7">
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            </form>

        </div> -->

        <div class="col-xs-12">
            <hr>
            <div class="owl-carousel">
                <div class="asr_mini"><img src="../imagenes/auspiciadores/3M_Logo_45pt_95x64.gif" class="img-responsive" alt=""></div>
                <div class="asr_mini"><img src="../imagenes/auspiciadores/vw-logo-1.jpg" class="img-responsive" alt=""></div>
                <div class="asr_mini"><img src="../imagenes/auspiciadores/AL-PM3001-150x150.jpg" class="img-responsive" alt=""></div>
                <div class="asr_mini"><img src="../imagenes/auspiciadores/images.jpg" class="img-responsive" alt=""></div>
            </div>

        </div>

    </div>
</div>
</main><!--contenido-principal-->

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
<script src="../js/owl.carousel.min.js"></script>
<!-- > js agregados por nosotros < -->
<script src="../js/main.js"></script>

<script type="text/javascript">

      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  dots: false,
                  nav: true
              },
              600:{
                  items:2,
                  dots: false,
                  nav: true
              },
              1000:{
                  items:4,
                  nav: true,
                  dots: false,
                  navText: '<>'
                  }
          }
      })

</script>
<script src="../js/validar_sesion.js"></script>
<!-- <script src="../js/sweetalert.min.js"></script> -->
<?php
require_once'../comun/comun.php';
login();
?>
<script>
// function eventoAlertCorrecto(){
// swal("Exito!", "Se ha agregado correctamente!", "success");
// }

   $("#registro").submit(function(){//captura cuando se envia el formulario
      event.preventDefault();//detiene el envio del formulario


          $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

              url:"../mantenedores/mantenedoresIngresar.php?mant=1&func=1&tipousuario=2&estadousuario=1", //donde se va a registrar al usuario "mantenedoresIngresar.php"
              data:$("#registro").serialize(),
              success:function(){
                    alert("Registrado Exitosamente.");
                      //eventoAlertCorrecto();
                      eliminarCamposRegistro();

                  }


          });
          return false;
  });


  function eliminarCamposRegistro(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
       $("#txt_run").val("");
       $("#txt_nombre").val("");
       $("#txt_apellido").val("");
       $("#txt_password").val("");
       $("#txt_telefono").val("");
       $("#txt_correo").val("");

  }


</script>
</body>

</html>
