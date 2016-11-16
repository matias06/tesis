<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<!--#####-nvm-#####-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contacto</title>
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
    <form action="#" class="">
                <div class="form-group">
                   <label for="nombre">Nombre:</label>
                   <input class="form-control" type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" placeholder="Apellido">
                </div>
                <div class="form-group">
                   <label for="correo">Correo Electrónico:</label>
                   <input class="form-control" type="email" placeholder="Correo">
                </div>
                <div class="form-group">
                   <label for="mensaje">Mensaje</label>
                   <textarea class="form-control col-xs-12" id="mensaje"  placeholder="Escriba su mensaje"></textarea>    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <br><a href="index.php" class="btn btn-success col-xs-12">Enviar</a>
                </div>
                
                
           </form>

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
