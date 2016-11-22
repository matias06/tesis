<?php session_start();
global $con;


function cargarHeader(){
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilo.css">
<link href="../css/sb-admin.css" rel="stylesheet"> <!-- menu botones del mantenedor -->
<!-- <link href="../css/plugins/morris.css" rel="stylesheet"> -->
<!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

<!-- <script src="../js/jquery.validate.min.js"></script> -->
<script src="../js/sweetalert.min.js"></script>
<!-- <link rel="stylesheet" href="../js/validaciones.js">
<link rel="stylesheet" href="../js/validar_formulario.js"> -->
<link rel="stylesheet" type="text/css" href="../css/sweet-alert.css">



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

                                <li><a href="../principal/reportes.php">Reportes</a></li>
                                <li><a href="../mantenedores/mantenedores.php">Mantenedores</a></li>
                                <li><a href="../principal/proveedores.php">Proveedores</a></li>
                                <li><a href="../principal/clientes.php">Clientes</a></li>
                                <li><a href="../principal/orden.php">Orden de trabajo</a></li>
                                <li><a href="../comun/destruirSesion.php">Cerrar Sesión</a></li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </header>
        </div>
        </div>
<?php
}

    function cargarMenuPublico() {


    }
    ?>
    <script type="text/javascript">
    //                         function cargarDivUsuario(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

    //                             $.ajax({url: '../mantenedores/mantUsuario.php',
    //                                     success:function(data){
    //                                         $("#page-wrapper").html(data);
    //                                     }
    //                             });
    //                         }
    //                         </script>
                            <?php
// }



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
                    <a href="../principal/index.php">Inicio</a>
                </li>
                <li>
                    <a href="../principal/servicios.php">Servicios</a>
                </li>
                <li>
                    <a href="../principal/catalogo.php">Catálogo</a>
                </li>
                <li>
                    <a href="../principal/contacto.php">Contacto</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar <b class="caret"></b></a>
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
                <h4 class="modal-title">Inicie Sesion</h4>
            </div>
            <div class="modal-body">

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

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
// <!-- Modal -->

// echo'<div class="modal fade" id=" " role="dialog">';
//   echo'<div class="modal-dialog">';
//
//     // <!-- Modal content-->
//     <div class="modal-content">
//       <div class="modal-header" style="padding:35px 50px;">
//         <button type="button" class="close" data-dismiss="modal">&times;</button>
//         <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
//       </div>
//       <div class="modal-body" style="padding:40px 50px;">
//         <form role="form">
//           <div class="form-group">
//             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
//             <input type="text" class="form-control" id="usrname" placeholder="Enter email">
//           </div>
//           <div class="form-group">
//             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
//             <input type="text" class="form-control" id="psw" placeholder="Enter password">
//           </div>
//           <div class="checkbox">
//             <label><input type="checkbox" value="" checked>Remember me</label>
//           </div>
//             <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
//         </form>
//       </div>
//       <div class="modal-footer">
//         <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
//         <p>Not a member? <a href="#">Sign Up</a></p>
//         <p>Forgot <a href="#">Password?</a></p>
//       </div>
//     </div>
//
//   </div>
// </div>
// <script>
// $(document).ready(function(){
//     $("#myBtn").click(function(){
//         $("# ").modal();
//     });
// });
// </script>


                    //script sesion


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
