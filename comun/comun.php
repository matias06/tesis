<?php session_start();
global $con;


function cargarHeader(){
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="Author" content="" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">



<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../css/sb-admin.css" rel="stylesheet"> <!-- menu botones del mantenedor -->
<!-- <link href="../css/plugins/morris.css" rel="stylesheet"> -->
<!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

<!-- <script src="../js/jquery.validate.min.js"></script> -->
<script src="../js/sweetalert.min.js"></script>
<!-- <link rel="stylesheet" href="../js/validaciones.js">
<link rel="stylesheet" href="../js/validar_formulario.js"> -->
<link rel="stylesheet" type="text/css" href="../css/sweet-alert.css">
<link rel="stylesheet" href="../css/estilo.css">




<?php
}

function cargarMenu(){
?>
           <div class="row">
            <div class="container">
            <header>
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="220" height="50"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-1">
                            <ul class="nav navbar-nav">

                                <li><a href="../principal/reportes.php"><span class="glyphicon glyphicon-file">Reportes</span></span></a></li>
                                <li><a href="../mantenedores/mantenedores.php"><span class="glyphicon glyphicon-cog">Mantenedores</span></a></li>
                                <li><a href="../principal/proveedores.php"><span class="glyphicon glyphicon-briefcase"></span> Proveedores</a></li>
                                <li><a href="../principal/comprasProveedor.php"><span class="glyphicon glyphicon-shopping-cart">Compras</span></a></li>
                                <li><a href="../principal/ventaproducto.php"><span class="glyphicon glyphicon-barcode">Venta</span></a></li>
                                <li><a href="../principal/stockProductos.php"><span class="glyphicon glyphicon-list-alt">Stock</span></a></li>
                                <li><a href="../comun/destruirSesion.php"><span class="glyphicon glyphicon-remove-circle">Cerrar Sesión</span></a></li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </header>
        </div>
        </div>
<?php
}
function cargarMenuUsuario(){
?>
           <div class="row">
            <div class="container">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="220" height="50"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../comun/destruirSesion.php"><span class="glyphicon glyphicon-off"> Salir</span></a></li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </header>
        </div>
        </div>
<?php
}

function menuPublico(){
    ?>
    <div class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div><img src="../comun/logo/fsp.png" alt="" width="245" height="55"></div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../principal/index.php"><span class="glyphicon glyphicon-home"> Inicio</span></a>
                </li>
                <li>
                    <a href="../principal/servicios.php"><span class="glyphicon glyphicon-wrench"> Servicios</span></a>
                </li>
                <li>
                    <a href="../principal/catalogo.php"><span class="glyphicon glyphicon-picture"> Catálogo</span></a>
                </li>
                <li>
                    <a href="../principal/contacto.php"><span class="glyphicon glyphicon-envelope"> Contacto</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href='#modal-id-1'>Iniciar Sesion</a></li>
                        <li><a href="../principal/registro.php">Registro</a></li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>


        //modal//

  <div class="modal" id="modal-id-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h1 class="text-center login-title">Iniciar Sesion</h1>
            </div>
            <!-- <div class="modal-body">

            <form id="inicio_sesion" name="inicio_sesion" action="#" align="center">
                <div class="form-group">
                <label for="run">Digite su RUN:</label><br>
                <input class="" name="run_usuario" type="text" placeholder="Run Usuario">
                </div><br>
                <div class="form-group">
                <label for="password">Ingrese Contraseña:</label><br>
                <input class="" name="password_usuario" type="password" placeholder="Contraseña">
                </div>
                <input type="submit" value="Aceptar" class="btn btn-success">
            </form>

            </div> -->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-1">

            <div class="account-wall">

<!-- <div class="col-sm-offset-2 col-md-offset-4"> -->
  <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
      alt="">
<!-- </div> -->

                <form class="form-signin" name="inicio_sesion" id="inicio_sesion" action="">
                    <input type="text" class="form-control" placeholder="19.050.873-0" name="run_usuario" required autofocus>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password_usuario" required>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Recordarme
                    </label>
                    <button class="btn btn-lg btn-primary btn-block" type="submit"   >
                        Aceptar</button>
                        <button class="btn btn-lg btn-danger btn-block" type="" data-dismiss="modal">
                        Cancelar</button>
                 </form>

            </div>

        </div>
    </div>
</div>
            <div class="modal-footer">
                <!-- <button type="submit" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
            </div>
        </div>
    </div>
</div>
 <?php
}

function footerPublico(){
    ?>
    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-sm-6 col-md-4">

        <li><a href="contacto.php">Preguntas Frecuentes</a></li>
        <li><a href="catalogo.php">Categorias</a></li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="registro.php">Registrate</a></li>

    </div>

    </div>
</div>
  <?php
}

?>
