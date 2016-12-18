<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contacto</title>
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
<br>
<main class="contenido-principal"><!--contenido-principal-->
<div class="container">
    <form id="formularioMensajes" name="formularioMensajes" method="POST" class="col-md-8 col-md-offset-2">
      <legend align="center">Contacto</legend>
                <div class="form-group">
                   <label for="nombre">Nombre:</label>
                   <input class="form-control" required id="nombre" name="nombre" type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" required id="apellido" name="apellido" type="text" placeholder="Apellido">
                </div>
                <div class="form-group">
                   <label for="correo">Correo Electrónico:</label>
                   <input class="form-control" required id="correo" name="correo" type="email" placeholder="Correo">
                </div>
                <div class="form-group">
                   <label for="mensaje">Mensaje</label>
                   <textarea class="form-control col-xs-12" required id="mensaje"  name="mensaje" placeholder="Escriba su mensaje"></textarea>
                </div>
                <div class="form-group">
                  <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                      <br><input type="submit"  class="btn btn-success col-xs-12"></input>
                  </div>
                </div>

           </form>

    </div>

</main><!--contenido-principal-->

<br>

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
<script src="../js/sweetalert.min.js"></script>
<?php
require_once'../comun/comun.php';
login();
?>

<script>

function eliminarCamposMensaje(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
        $("#nombre").val("");
        $("#apellido").val("");
        $("#correo").val("");
        $("#mensaje").val("");

}

function eventoAlertCorrecto(){
swal("Exito!", "Se ha Enviado Mensaje correctamente!", "success")
 // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
}
</script>
<script>
   $("#formularioMensajes").submit(function(){//captura cuando se envia el formulario
      event.preventDefault();//detiene el envio del formulario

      if($("#nombre").val()=="" || $("#apellido").val()=="" || $("#correo").val()=="" || $("#mensaje").val()==""){
           alert("No puede dejar campos vacios");
      }else{

          $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

              url:"insertMensaje.php", //donde se va a ingresar el mensaje "insertarMensaje.php"
              data:$("#formularioMensajes").serialize(),
              success:function(respuesta){
                  if(respuesta == 1){
                    //alert("mensaje enviado.");
                      eventoAlertCorrecto();
                      eliminarCamposMensaje();
                  }else{
                      alert("Ha ocurrido un error.");
                  }

              }
          });
          return false;
        }
  });


</script>

</body>

</html>
