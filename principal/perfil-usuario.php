<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Usuario</title>
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
    cargarMenuUsuario();
    ?>
<!--FinalMenu-->

<main class="perfil-usuario"><!--perfil-usuario-->
<div class="container">
    <div class="row">

    <h4 class="lead">Perfil de: <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></h4>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-home fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" class="mini-u-btn" id="misdatos">Mis Datos</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-calendar-o fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" class="mini-u-btn" id="misreservas">Mis Reservas</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-car fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" class="mini-u-btn" id="misautos">Mis Vehiculos</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

              <?php
                $hora = date('H:i:s');
                echo $hora;
               ?>

            </div>

            <div class="mini-u" style="margin-top: 1rem;">

            <?php
              $fecha = date('d-M-Y');
              echo $fecha;
             ?>

            </div>

        </div>

        <div class="col-xs-12"> <!-- contenido  del menu seleccionado -->

        <div class="despegable-menu" id="datos-despegable">

                <span class="lead">Mis Datos
                    <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-datos'><i class="fa fa-edit fa-1g"></i> Modificar Datos</a>
                </span>

                <div class="modal fade" id="modal-datos"><!-- modal para modificar datos-->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modificar Mis Datos</h4>
                            </div>
                            <div class="modal-body">

                            <form action="" method="POST" role="form">

                                <div class="form-group">
                                    <label for="">Rut</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div><!-- final modal para modificar datos-->
            <br>

            <b>Nombre: </b><br>
            <b>Correo:</b><br>
            <b>Fecha de Nacimiento:</b>

        </div>

        <div class="despegable-menu" id="reservas-despegable">

            <span><b>Mis Reservas</b></span>
            <br>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        </div>

        <div class="despegable-menu" id="autos-despegable">

                <span class="lead">Mis Automoviles
                    <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-auto'><i class="fa fa-plus-circle fa-1g"></i>  Agregar Autos</a>
                </span>


                <div class="modal fade" id="modal-auto"><!-- modal para agregar vehiculo-->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Agregar Un Nuevo automovil</h4>
                            </div>
                            <div class="modal-body">

                            <form action="" method="POST" role="form">

                                <div class="form-group">
                                    <label for="">Patente</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                                <div class="form-group">
                                    <label for="">Marca</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>
                                <div class="form-group">
                                    <label for="">Modelo</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                                <div class="form-group">
                                    <label for="">A&ntilde;o</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div><!-- final modal para agregar nuevo vehiculo-->
            <br>



            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Patente</th><th>Marca</th><th>Modelo</th><th>Año</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BC-51-52</td><td>Chevrolet</td><td>Silverado</td><td>2015</td>
                            <td><a data-toggle="modal" href='#modal-modificar-auto'><i class="fa fa-cog fa-2x"></i></a></td>
                        </tr>
                        <tr>
                            <td>BB-15-22</td><td>Dodge</td><td>Ram 1500</td><td>2013</td>
                            <td><a data-toggle="modal" href='#modal-modificar-auto'><i class="fa fa-cog fa-2x"></i></a></td>
                        </tr>
                    </tbody>
                </table>

                <!-- modal modificacion del vehiculo-->

                <div class="modal fade" id="modal-modificar-auto">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modificacion del Vehiculo</h4>
                            </div>
                            <div class="modal-body">

                            <form action="" method="POST" role="form">

                                <div class="form-group">
                                    <label for="">Patente</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                                <div class="form-group">
                                    <label for="">Marca</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>
                                <div class="form-group">
                                    <label for="">Modelo</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                                <div class="form-group">
                                    <label for="">A&ntilde;o</label>
                                    <input type="text" class="form-control" id="" placeholder="Input field">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- final contenido del menu seleccionado-->

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

<!-- > js agregados por nosotros < -->
<script src="../js/main.js"></script>
<script src="../js/validar_sesion.js"></script>
<script>


$("#datos-despegable").show();
$("#reservas-despegable").hide();
$("#autos-despegable").hide();

$( "#misdatos" ).click(function() {

    $("#datos-despegable").fadeIn(2000);
    $("#reservas-despegable").hide();
    $("#autos-despegable").hide();

});

$( "#misreservas" ).click(function() {

    $("#reservas-despegable").fadeIn(2000);
    $("#datos-despegable").hide();
    $("#autos-despegable").hide();

});

$( "#misautos" ).click(function() {

    $("#autos-despegable").fadeIn(2000);
    $("#datos-despegable").hide();
    $("#reservas-despegable").hide();

});

</script>
</body>

</html>
