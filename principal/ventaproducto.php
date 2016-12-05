<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
   <title>Proveedores</title>
  <?php   cargarHeader(); ?>
  <!-- <link href="../css/style.css" rel="stylesheet" /> -->

</head>
<body>

  <header>
    <?php cargarMenu(); ?>
  </header>

<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
<br>

<div class="contenido-ventas">

    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">

                <nav class="navbar navbar-default sidebar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Menú</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Datos usuario <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                              <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="#" onclick="cargarDatosModal()" data-toggle="modal" data-target="#usuario">Crear Usuario</a></li>
                                <li><a href="#" onclick="cargarDatosModal()" data-toggle="modal" data-target="#vehiculo">CrearVehiculo</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sub Menu 4</a></li>
                              </ul>
                            </li>
                            <li ><a href="#">Menu 2<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                            <li ><a href="#">Menu 3<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                          </ul>
                        </div>
                    </div>
                </nav>

            </div>

            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">

                <div class="col-xs-12">

                <form action="" method="POST" role="form">
                    <legend>Datos:</legend>

                    <div class="form-group col-xs-12">
                        <label class="pull-left">Fecha: 20/05/2016</label>
                        <label class="pull-right">Numero Boleta: 1022</label>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Rut">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Nombre">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Apellido">
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Descripcion Producto">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Proveedor">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Valores">
                    </div>

                    <button type="submit" id="btn--" class="btn btn-xs btn-primary">BUSCAR &nbsp; <i class="fa fa-search fa-1g"></i></button>

                </form>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="table-responsive">
                    <center><h4 class="lead">Nombre de la Tabla</h4></center>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Item 1</th>
                                    <th>Item 2</th>
                                    <th>Item 3</th>
                                    <th>Item 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ItemDesc1</td>
                                    <td>ItemDesc2</td>
                                    <td>ItemDesc3</td>
                                    <td>ItemDesc4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Ventana modal -->
<div class="modal fade" id="usuario">
       <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Crear Usuario</h3>
              </div>
              <!-- Comienzo formulario -->
<div class="container">
<form action="" id="formularioRegistro" name="formularioRegistro" method="POST">
<fieldset>

    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="run">Run:</label>
                <input class="form-control" id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
            </div>
        </div>
    </div>

    <div class="row">
         <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="apellido">Contraseña</label>
                <input class="form-control" id="txt_password" name="txt_password" placeholder="Contraseña Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="tipoUsuario">Tipo Usuario</label>
                     <select class="form-control" name="tipousuario" id="tipousuario">
                        <?php
                            require_once '../clases/claseTipoUsuario.php';
                            $TipoU= new TipoUsuario();
                            $filasTipoU= $TipoU->listarTipoUsuario();

                            foreach($filasTipoU as $tipo){
                                echo '<option value="'.$tipo['id_tipo_usuario'].'" >'.$tipo['descripcion_tipo_usuario'].'</option>';
                            }

                         ?>
                    </select>
            </div>
        </div>
    </div>


    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

            <div class="form-group">

                <label for="estado">Estado usuario</label>
                     <select class="form-control" name="estadousuario" id="estadousuario">
                        <?php
                            require_once '../clases/claseEstadoUsuario.php';
                            $estadoUsuario= new EstadoUsuario();
                            $filasEstado= $estadoUsuario->listarEstadoUsuario();

                            foreach($filasEstado as $tipoEst){
                                echo '<option value="'.$tipoEst['id_estado_usuario'].'" >'.$tipoEst['descripcion_estado_usuario'].'</option>';
                            }
                         ?>
                    </select>
            </div>
        </div>
        <br>
        <div class="container">
                <div class="col-md-3">
                    <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">

                </div>
            </div>


</fieldset>
</form>
</div>
</div>
</div>
</div>
<!--MODAL VEHICULO  -->
<!-- Ventana modal -->
<div class="modal fade" id="vehiculo">
       <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Crear Vehiculo</h3>
              </div>
              <!-- Comienzo formulario -->
<div class="container">
<form action="" id="formularioRegistro" name="formularioRegistro" method="POST">
<fieldset>

    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="run">Patente:</label>
                <input class="form-control" id="txt_patente" name="txt_patente" placeholder="Rut Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="nombre">Marca</label>
                <input class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="apellido">Modelo</label>
                <input class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
              <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">

            </div>
        </div>
    </div>

</fieldset>
</form>
</div>
</div>
</div>
</div>



</body>
</html>

                        <script>


                        $("#formularioRegistro").submit(function(){//captura cuando se envia el formulario
                           event.preventDefault();//detiene el envio del formulario


                               $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                   url:"../mantenedores/mantenedoresIngresar.php?mant=1&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                   data:$("#formularioRegistro").serialize(),
                                   success:function(respuesta){
                                        //alert("Usuario Agregado correctamente");

                                           alert(respuesta);
                                           //$("#formularioProveedor").html(respuesta);
                                           cambiarPagina(1);
                                          //  cargarDivTablaUsuario();
                                          //  eliminarCamposUsuario();
                                           eventoAlertCorrecto();

                                   }
                               });
                               return false;
                        });

              function eventoAlertCorrecto(){
              swal("Exito!", "Se ha agregado correctamente!", "success")
              }

              function mostarDatosUsuario(fila){

               $("#txt_run_modificar").val($("#txt_run"+fila).html());
               $("#txt_nombre_modificar").val($("#txt_nombre"+fila).html());
               $("#txt_apellido_modificar").val($("#txt_apellido"+fila).html());



               }
                        </script>
