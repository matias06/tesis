<?php
      // include '../comun/comun.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/clasevehiculo.php';
    require_once '../clases/usuario.php';
    require_once '../clases/claseReserva.php';
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

    <!-- <script src="../js/vendor/modernizr-2.8.3.min.js"></script> -->

    <script src="../js/jquery.min.js"></script><!--version v1.12-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript">

    </script>


    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/normalize.css" rel="stylesheet" />
    <link href="../css/sweet-alert.css" rel="stylesheet" />
    <!-- <link href="../css/datepicker.css" rel="stylesheet" /> -->

    <!-- > Bootstrap v3.3.7 and Font Awesome v4.6.3 < -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />


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
                    <a href="#" value="datos" class="mini-u-btn" id="misdatos" onclick="cargarTablaDatos()">Mis Datos</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-calendar-o fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" value="reserva" class="mini-u-btn" id="misreservas" onclick="cargarTablaReserva()">Mis Reservas</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-car fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" value="vehiculo" class="mini-u-btn" id="misautos" onclick="cargarTablaVehiculos()">Mis Vehiculos</a>


                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

              <?php
              date_default_timezone_set("America/Santiago");
                $hora = date('H:i:s');
                echo $hora;
               ?>

            </div>

            <div class="mini-u" style="margin-top: 1rem;">

            <?php
              $fecha = date('d-m-Y');
              echo $fecha;
             ?>

            </div>

        </div>

        <div class="col-xs-12"> <!-- contenido  del menu seleccionado -->

        <div class="despegable-menu" id="datos-despegable">

                <span class="lead">Mis Datos
                    <!-- <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-datos'><i class="fa fa-edit fa-1g"></i> Modificar Datos</a> -->
                </span>

                 <div class="modal fade" id="modal-datos"><!-- modal para modificar datos -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Modificar Mis Datos</h4>
                            </div>
                            <div class="container">

                            <form id="formModificarUsuario" name="formModificarUsuario">
                              <div class="row">
                              <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                  <div class="form-group">
                                    <label for="rut">Rut</label>
                                    <input type="text" class="form-control" readonly id="txt_run_modificar" name="txt_run_modificar" required placeholder="Modifique su run">
                                </div>
                                </div>
                                </div>
                                  <div class="row">
                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre_modificar" name="txt_nombre_modificar" required placeholder="Modifique su nombre">
                                </div>
                                </div>

                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" class="form-control" id="txt_apellido_modificar" name="txt_apellido_modificar" required placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>

                                <div class="row">
                              <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                  <div class="form-group">
                                    <label for="nombre">Contraseña:</label>
                                    <input type="text" class="form-control" id="txt_contraseña_modificar" name="txt_contraseña_modificar" required placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Teléfono</label>
                                    <input type="text" class="form-control" id="txt_telefono_modificar" name="txt_telefono_modificar" required placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                 <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                    <label for="correo">Correo</label>
                                      <input class="form-control" id="txt_correo_modificar" name="txt_correo_modificar" required placeholder="Modifique su correo" type="email">
                                </div>
                                </div>
                            </div>
                            <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                <div class="form-group">
                                    <!-- <label for="tipoUsuario">Tipo Usuario</label> -->
                                         <select class="form-control hidden" name="cmb_tipo_modificar" id="cmb_tipo_modificar" required>
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

                            <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                <div class="form-group">
                                    <!-- <label for="estado">Estado usuario</label> -->
                                         <select class="form-control hidden" name="cmb_estado_modificar" id="cmb_estado_modificar" required>
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
                            <div class="row">
                             <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" value="Modificar datos" name="btn_guardar">Modificar</button>
                            </div>
                        </div>

                         <div style="animation-delay: 0.2s;" class="col-md-6 animated-panel zoomIn">
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                            </form>
                        </div>

                  </div>
                </div>
              </div>
           </div><!-- final modal para modificar datos-->

           <div class="table-responsive">
            <table class="table">
                <tr>
                  <th>Run</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Password</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Tipo Usuario</th>
                  <th>Estado</th>
                  <th>Modificar</th>
                </tr>
              <tbody id="cargarDatos">

              </tbody>
            </table>
        </div>
      </div>
<!--CREAR RESERVAS -->
        <div class="despegable-menu" id="reservas-despegable">

            <span><b>Mis Reservas</b></span>
            <br>

            <div class="modal fade" id="reservaCrear">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title">Agregar nueva Reserva</h4>
                       </div>
                       <div class="modal-body">

                       <form id="formModReservasCrear" name="formModReservasCrear" method="POST" role="form">
                         <div style="animation-delay: 0.2s;" class="col-md-12 animated-panel zoomIn">
                             <div class="form-group">
                                     <label for="servicio">Datos vehículo: </label>
                                      <select class="form-control" required name="txt_patenteReserva" id="txt_patenteReserva">
                                        <option value="" selected disabled>Seleccione su vehículo:</option>
                                         <?php
                                             require_once '../clases/clasevehiculo.php';
                                             $ver= new Vehiculo();
                                             $ver->setrun($_SESSION['id']);
                                             $filasPatente = $ver->listarPatente();
                                             foreach($filasPatente as $vehiculo){
                                                 echo '<option value="'.$vehiculo['patente'].'" >'.$vehiculo['patente'].' '.$vehiculo['marca'].' '.$vehiculo['modelo'].'</option>';
                                             }
                                          ?>
                                     </select>
                             </div>
                         </div>

                           <div style="animation-delay: 0.2s;" class="col-md-12 animated-panel zoomIn">
                               <div class="form-group">
                                   <label for="servicio">Servicio: </label>
                                        <select class="form-control" required name="txt_id_servicioReserva" id="txt_id_servicioReserva">
                                          <option value="" selected disabled>Seleccione servicio:</option>
                                           <?php
                                               require_once '../clases/claseServicio.php';
                                               $serv= new Servicio();
                                               $filasServicio= $serv->listarServicio();
                                               foreach($filasServicio as $servicio){
                                                   echo '<option value="'.$servicio['id_servicio'].'" >'.$servicio['descripcion_servicio'].'</option>';
                                               }
                                            ?>
                                       </select>
                               </div>
                           </div>
                        <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                           <div class="form-group">
                               <label for="">Problema</label>
                               <input type="text" class="form-control" required id="txt_descripcionProblemaReserva" name="txt_descripcionProblemaReserva" placeholder="Ingrese su problema automotriz">
                           </div>
                         </div>

                           <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                           <div class="form-group">
                                   <label for="hora">Horas: </label>
                                        <select class="form-control" required name="cmb_hora_reserva" id="cmb_hora_reserva">
                                          <option value="" selected disabled>Seleccione hora:</option>
                                           <?php
                                               require_once '../clases/claseHoras.php';
                                               $h= new Horas();
                                               $filasHoras= $h->listarHora();
                                               foreach($filasHoras as $horas){
                                                   echo '<option value="'.$horas['id_hora'].'" >'.$horas['descripcion_hora'].'</option>';
                                               }
                                            ?>
                                       </select>
                               </div>
                          </div>

                   <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                           <div class="form-group">
                               <label for="">Fecha</label>
                               <input type="date" class="form-control" required id="fechareserva" name="fechareserva" placeholder="Ingrese su problema automotriz">
                           </div>


                   </div>
 </div>

                       <div class="modal-footer">
                          <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                           <button id="reservaCrear" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#reservaCrear" value="Guardar Cambios" name="btn_CrearReserva">Crear</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                         </div>
                       </div>

                       </form>
                   </div>
               </div> <!-- final modal para agregar nuevo vehiculo -->
           </div>

<!-- MODIFICAR RESERVA -->
                             <div class="modal fade" id="modal-auto"><!--modal para agregar vehiculo -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Modificar Reserva</h4>
                                        </div>
                                        <div class="modal-body">

                                        <form id="formModReservas" name="formModReservas" method="POST" role="form">

                                          <input type="text" class="form-control hidden" id="txt_id_reserva_modificar" name="txt_id_reserva_modificar" placeholder="">

                                          <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                              <div class="form-group">
                                                      <label for="servicio">Datos Vehiculo: </label>
                                                       <select class="form-control" required name="txt_patenteReserva_modificar" id="txt_patenteReserva_modificar">
                                                         <option value="" selected disabled>Seleccione su vehículo:</option>
                                                          <?php
                                                              require_once '../clases/clasevehiculo.php';
                                                              $ver= new Vehiculo();
                                                              $ver->setrun($_SESSION['id']);
                                                              $filasPatente= $ver->listarPatente();
                                                              foreach($filasPatente as $vehiculo){
                                                                  echo '<option value="'.$vehiculo['patente'].'" >'.$vehiculo['patente'].' '.$vehiculo['marca'].' '.$vehiculo['modelo'].'</option>';
                                                              }

                                                           ?>
                                                      </select>
                                              </div>
                                          </div>

                                            <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                                <div class="form-group">
                                                    <label for="servicio">Servicio: </label>
                                                         <select class="form-control" required name="txt_id_servicioReserva_modificar" id="txt_id_servicioReserva_modificar">
                                                           <option value="" selected disabled>Seleccione servicio:</option>

                                                            <?php
                                                                require_once '../clases/claseServicio.php';
                                                                $serv= new Servicio();
                                                                $filasServicio= $serv->listarServicio();
                                                                foreach($filasServicio as $servicio){
                                                                    echo '<option value="'.$servicio['id_servicio'].'" >'.$servicio['descripcion_servicio'].'</option>';
                                                                }
                                                             ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                            <div class="form-group">
                                                <label for="">Problema</label>
                                                <input type="text" class="form-control" required id="txt_descripcionProblemaReserva_modificar" name="txt_descripcionProblemaReserva_modificar" placeholder="Ingrese su problema automotriz">
                                            </div>
                                              </div>

                                              <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                            <div class="form-group">
                                                    <label for="hora">Horas: </label>
                                                         <select class="form-control" required name="cmb_hora_reserva_modificar" id="cmb_hora_reserva_modificar">
                                                           <option value="" selected disabled>Seleccione hora:</option>

                                                            <?php
                                                                require_once '../clases/claseHoras.php';
                                                                $h= new Horas();
                                                                $filasHoras= $h->listarHora();
                                                                foreach($filasHoras as $horas){
                                                                    echo '<option value="'.$horas['id_hora'].'" >'.$horas['descripcion_hora'].'</option>';
                                                                }
                                                             ?>
                                                        </select>
                                                </div>
                                              </div>

                                              <!-- <div class='col-sm-6'> -->
                                    <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                      <!-- <div class="form-group">
                  <div class='input-group date' id='datetimepicker5'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div> -->
                                  <div class="form-group">
                                      <label for="fecha">Fecha</label>
                                      <input class="form-control" required title="Debe ingresar fecha" id="fechareserva_modificar" name="fechareserva_modificar" type="date">
                                  </div>

                                    </div>
                                </div>


                                        <div class="modal-footer">
                                          <div style="animation-delay: 0.2s;" class="col-md-10 animated-panel zoomIn">
                                            <button id="modal-auto" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-auto" value="Guardar Cambios" name="btn_registrar">Modificar</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                      </div>
                                        </form>
                                        </div>

                                </div>
                            </div> <!-- final modal para agregar nuevo vehiculo -->

                <div class="table-responsive">
                  <table class="table">
                      <tr>
                        <th>Patente</th>
                        <th>Run</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Servicio</th>
                        <th>Problema</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                        <th><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reservaCrear">Crear</a></th>

                      </tr>
                    <tbody id="cargarReservas">

                    </tbody>
                  </table>
                  </div>
            </div>
            <div class="despegable-menu" id="autos-despegable">

                   <span class="lead">Mis Automoviles
                       <!-- <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-auto'><i class="fa fa-plus-circle fa-1g"></i>  Agregar Autos</a> -->
                   </span>
        <!-- MODIFICAR VEHICULO -->
                   <div class="modal fade" id="modalmodificar">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title">Modificacion del Vehiculo</h4>
                               </div>
                               <div class="modal-body">

                               <form id="formModificarVehiculo" name="formModificarVehiculo">

                                   <div class="form-group">
                                       <label for="patente">Patente</label>
                                       <input type="text" class="form-control" readonly id="txt_patente_modificar" name="txt_patente_modificar" placeholder="Modifique su patente">
                                   </div>

                                   <div class="form-group">
                                       <label for="marca">Marca</label>
                                       <input type="text" class="form-control" required id="txt_marca_modificar" name="txt_marca_modificar" placeholder="Modifique su marca">
                                   </div>
                                   <div class="form-group">
                                       <label for="modelo">Modelo</label>
                                       <input type="text" class="form-control" required id="txt_modelo_modificar" name="txt_modelo_modificar" placeholder="Modifique su modelo">
                                   </div>
                                   <div class="form-group">
                                       <label for="modelo">Run</label>
                                       <input type="text" class="form-control" readonly id="txt_runVehiculo_modificar" name="txt_runVehiculo_modificar" placeholder="Modifique su modelo">
                                   </div>
                                   <div class="form-group">
                                       <button  type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-modificar-auto" value="Guardar Cambios" name="btn_registrar">Modificar</button>
                                        <!-- <input type="submit" id="btn_insert" class="btn btn-primary" value="Guardar Cambios" name="btn_registrar"> -->
                                           <!-- <input type="submit" id="btn_insert" class="btn btn-primary" data-dismiss="modal" value="Guardar Cambios" name="btn_registrar"> -->
                                   </div>

                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                   <!-- <button type="button" class="btn btn-primary">Guardar Cambios</button> -->

                               </div>

                               </form>
                           </div>
                       </div>
                   </div>
<!-- MODAL CREACION DE VEHICULOS -->
                   <div class="modal fade" id="myModal">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title">Crear Vehiculo</h4>
                               </div>
                               <form id="formularioCrearVehiculo"  name="formularioCrearVehiculo">
                               <div class="modal-body">
                                 <div class="row">
                                     <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                         <div class="form-group">
                                             <label for="patente">Patente:</label>
                                             <input class="form-control" title="Debe ingresar número patente" required id="txt_patente" name="txt_patente" placeholder="Número patente" type="text">
                                         </div>
                                   </div>
                                     <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                         <div class="form-group">
                                             <label for="nombre">Marca</label>
                                             <input class="form-control" title="Debe ingresar su marca" required id="txt_marca" name="txt_marca" placeholder="Ingresa marca" type="text">
                                         </div>
                                     </div>
                                     <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                         <div class="form-group">
                                             <label for="apellido">Modelo</label>
                                             <input class="form-control" title="Debe ingresar su modelo" required id="txt_modelo" name="txt_modelo" placeholder="Ingresar modelo" type="text">
                                         </div>
                                     </div>

                                 </div>
                               </form>
                                   <div class="form-group">
                                       <button id="myModal" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="crear" name="btn_guardar">Crear</button>
                                        <!-- <input type="submit" id="btn_insert" class="btn btn-primary" value="Crear" name="btn_crear"> -->
                                           <!-- <input type="submit" id="btn_insert" class="btn btn-primary" data-dismiss="modal" value="Guardar Cambios" name="btn_registrar"> -->
                                   </div>

                               </div>

                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                   <!-- <button type="button" class="btn btn-primary">Guardar Cambios</button> -->

                               </div>

                               </form>
                           </div>
                       </div>
                   </div>
                     <br>
                     <div class="table-responsive">
                   <table class="table">
                       <tr>
                         <th>Patente</th>
                         <th>Marca</th>
                         <th>Modelo</th>
                         <th>Run</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                         <th><a href="#" class="btn btn-primary" onclick="cargarCrearVehiculo()" data-toggle="modal" data-target="#myModal">Crear</a></th>

                       </tr>
                     <tbody id="cargarVehiculos">

                     </tbody>
                   </table>
                 </div>

                 <!-- modal modificacion del vehiculo-->

               </div>


           </div><!-- final contenido del menu seleccionado-->



        </div><!-- final contenido del menu seleccionado-->

    </div>
</div>
</main><!--contenido-principal-->

<!-- <div id="reserva">
muestra informacion
</div> -->

<footer>

<?php
require_once'../comun/comun.php';
footerPublico();
?>

</footer>
<div class="sub_footer">
    <span>&copy;Todos Los Derechos Reservados</span>
</div>

<script>
       function cargarMisDatos(fila){

        $("#txt_run_modificar").val($("#txt_run"+fila).html());
        $("#txt_nombre_modificar").val($("#txt_nombre"+fila).html());
        $("#txt_apellido_modificar").val($("#txt_apellido"+fila).html());
        $("#txt_contraseña_modificar").val($("#txt_password"+fila).html());
        $("#txt_telefono_modificar").val($("#txt_telefono"+fila).html());
        $("#txt_correo_modificar").val($("#txt_correo"+fila).html());
        $("#cmb_tipo_modificar").val($("#txt_descripcionTipo1"+fila).html());
        $("#cmb_estado_modificar").val($("#txt_descripcion_Estado1"+fila).html());
        }
</script>
 <!-- Carga la informacion a el div cargarDatos desde cargarTablaClientes -->
<script>

//         $(document).ready(function cargarTablaDatos(){
//            $.ajax({
//              url:'../cliente/cargarTablaCliente.php',
//              success:function(resultado){
//                $("#cargarDatos").html(resultado);
//                }
//
//      });
//   return false;
// });
   function cargarTablaDatos(){
         $.ajax({
           url:'../cliente/cargarTablaCliente.php',
           success:function(resultado){
             $("#cargarDatos").html(resultado);
             }
         });
     }

       function cargarMisReservas(fila){
        $("#txt_id_reserva_modificar").val($("#txt_id_reserva"+fila).html());

        $("#txt_runReserva_modificar").val($("#txt_runReserva"+fila).html());
        $("#txt_patenteReserva_modificar").val($("#txt_patente"+fila).html());

        $("#txt_marcaReserva_modificar").val($("#txt_marca"+fila).html());
        $("#txt_modeloReserva_modificar").val($("#txt_modelo"+fila).html());

        $("#txt_id_servicioReserva_modificar").val($("#txt_id_servicio"+fila).html());
        $("#txt_descripcionServicioReserva_modificar").val($("#txt_servicio"+fila).html());

        $("#txt_descripcionProblemaReserva_modificar").val($("#txt_problema"+fila).html());
        $("#fechareserva_modificar").val($("#txt_fecha"+fila).html());
        $("#cmb_hora_reserva").val($("#txt_hora"+fila).html());
        $("#txt_descripcion_hora_modificar").val($("#txt_descripcion_hora"+fila).html());
        $("#txt_id_estado_reserva_modificar").val($("#txt_id_estado_reserva"+fila).html());
        $("#txt_descripcionEstadoReserva_modificar").val($("#txt_descripcion_estado"+fila).html());

        }
</script>

 <!-- <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                });
            });
        </script> -->
<script type="text/javascript">
//
// $(document).ready(function cargarTablaReserva(){
//    $.ajax({
//      url:'../cliente/cargarTablaReserva.php',
//      success:function(resultado){
//        $("#cargarReservas").html(resultado);
//        }
// });
// return false;
// });

function cargarTablaReserva(){
$.ajax({
  url:'../cliente/cargarTablaReserva.php',
  success:function(resultado){
    $("#cargarReservas").html(resultado);
                }
        });
}

</script>
<script>
       function cargarMisVehiculos(fila){

        $("#txt_patente_modificar").val($("#txt_patente"+fila).html());
        $("#txt_marca_modificar").val($("#txt_marca"+fila).html());
        $("#txt_modelo_modificar").val($("#txt_modelo"+fila).html());
        $("#txt_runVehiculo_modificar").val($("#txt_runvehiculo"+fila).html());
       }


</script>
<!-- CARFAR RUN CLIENTE EN VENTANA MODAL CREAR VEHICULO  -->
<script>
       function cargarCrearVehiculo(fila){

        $("#txt_rut_vehiculocrear").val($("#txt_runvehiculo"+fila).html());
       }


</script>
<script type="text/javascript">


// $(document).ready(function cargarTablaVehiculos(){
//    $.ajax({
//      url:'../cliente/cargarTablaVehiculos.php',
//      success:function(resultado){
//        $("#cargarVehiculos").html(resultado);
//        }
// });
// return false;
// });
   function cargarTablaVehiculos(){
    $.ajax({
      url:'../cliente/cargarTablaVehiculos.php',
      success:function(resultado){
        $("#cargarVehiculos").html(resultado);

        }
    });
}


// MODIFICAR MIS DATOS
$("#formModificarUsuario").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario
   if($("#txt_run_modificar").val()=="" || $("#txt_nombre_modificar").val()=="" || $("#txt_apellido_modificar").val()=="" || $("#txt_telefono_modificar").val()=="" || $("#txt_correo_modificar").val()==""){
        alert("No puede dejar campos vacios");
   }else{
       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=1&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#formModificarUsuario").serialize(),
           success:function(respuesta){

                   //alert(respuesta);
                  // alert("hola");
                  // cargarTablaVehiculos();
                  cargarTablaDatos();
                  eventoAlertmodificar();
           }
       });
       return false;
     }
});

// MIS RESERVAS
$("#formModReservasCrear").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario
   if($("#txt_patenteReserva").val()=="" || $("#txt_id_servicioReserva").val()=="" ||
    $("#txt_descripcionProblemaReserva").val()==""){
        alert("No puede dejar campos vacios");
   }else{

       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=13&func=1",
           data:$("#formModReservasCrear").serialize(),
           success:function(respuesta){
              cargarTablaReserva();
                //alert("Usuario Agregado correctamente");
                //alert("hola");
                //alert(respuesta);
                   //$("#formularioProveedor").html(respuesta);


           }
       });
       return false;
     }
});

$("#formModReservas").submit(function(){
   event.preventDefault();+
  //  if($("#txt_patenteReserva_modificar").val()=="" || $("#txt_id_servicioReserva_modificar").val()=="" ||
  //   $("#txt_descripcionProblemaReserva_modificar").val()==""){
  //       alert("No puede dejar campos vacios");
  //  }else{

       $.ajax({

           url:"../mantenedores/mantenedoresIngresar.php?mant=13&func=2",
           data:$("#formModReservas").serialize(),
           success:function(respuesta){
             cargarTablaReserva();
                //alert(respuesta);
                 //$("#reserva").html(respuesta); muestra informacion en el div seleccionado
                  //alert("hola");
                  eventoAlertmodificar();
           }
       });
       return false;
    //  }
});

// ELIMINAR RESERVAS
function eliminarReservas(idProd){
      // alert(id);
      swal({
          title: "¿Eliminar reserva?",
          text: "",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Eliminar",
          cancelButtonText: "Cancelar!",
          closeOnConfirm: false,
          closeOnCancel: false },
          function(isConfirm){
              if (isConfirm) {
                   $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                      url:"mantenedoresIngresar.php?mant=2&prod=3", // donde se va a ingresar "mantenedoresIngresar.php"
                     data:"idProd="+idProd,
                      success:function(respuesta){
                              // alert(respuesta);
                               cargarDivTablaProducto();
                               cambiarPagina(1);
                      }
                  });
                  swal("ELIMINADO", "", "success");
              } else {
                  swal("Cancelado", "", "error");
              }
          });



  }


// MIS VEHICULOS

// CREAR VEHICULOS
$("#formularioCrearVehiculo").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario


       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=12&func=6",
           data:$("#formularioCrearVehiculo").serialize(),
           success:function(respuesta){
              cargarTablaVehiculos();
              eventoAlertIngresar();
                //alert("Usuario Agregado correctamente");
// alert("hola");
                 //alert(respuesta);
                   //$("#formularioProveedor").html(respuesta);


           }
       });
       return false;

});

// MODIFICAR MIS VEHICULOS
$("#formModificarVehiculo").submit(function(event){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario


       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
           url:"../mantenedores/mantenedoresIngresar.php?mant=12&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#formModificarVehiculo").serialize(),
           success:function(respuesta){
             //alert(respuesta);
             if(respuesta==1){
               cargarTablaVehiculos();
               eventoAlertmodificar();
             //alert("Vehiculo modificado");
                   //alert(respuesta);

        }
        cargarTablaVehiculos();
           }
       });
       return false;

});

  function eventoAlertIngresar(){
    swal("Exito!", "Se ha ingresado correctamente!", "success")
    // alert("Se ha modificado correctamente su vehiculo");
       }
       function eventoAlertmodificar(){
         swal("Exito!", "Se ha ingresado correctamente!", "success")
         // alert("Se ha modificado correctamente su vehiculo");
            }
// ELIMINAR VEHCULOS
       function eliminarVehiculo(id){

         //alert(id);
         swal({
             title: "¿Eliminar Vehiculo?",
             text: "",
             type: "warning",
             showCancelButton: true,
             confirmButtonColor: "#DD6B55",
             confirmButtonText: "Eliminar!",
             cancelButtonText: "Cancelar!",
             closeOnConfirm: false,
             closeOnCancel: false },
             function(isConfirm){
                 if (isConfirm) {
                      $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                         url:"../mantenedores/mantenedoresIngresar.php?mant=12&func=4", // donde se va a ingresar "mantenedoresIngresar.php"
                         data:"id="+id,
                         success:function(respuesta){
                           if(respuesta==1){
                             //$("#formModificarVehiculo").html(respuesta);
                                 //alert(respuesta);
                                 //alert("hola");
                                  cargarTablaVehiculos();
                                  swal("VEHICULO ELIMINADO!", "", "success");
                            }else{
                              swal("No se puede eliminar vehiculo, favor verifique si tiene reservas asociadas a la cuenta.", "", "error");

                            }
                         }
                     });
                 } else {
                     swal("Cancelado", "", "error");
                 }
             });
     }
</script>
<script>
$("#datos-despegable").show();
$("#reservas-despegable").hide();
$("#autos-despegable").hide();


$( "#misdatos" ).click(function() {

    $("#datos-despegable").fadeIn(1000);
    $("#reservas-despegable").hide();
    $("#autos-despegable").hide();


});

$( "#misreservas" ).click(function() {

    $("#reservas-despegable").fadeIn(1000);
    $("#datos-despegable").hide();
    $("#autos-despegable").hide();

});

$( "#misautos" ).click(function() {

    $("#autos-despegable").fadeIn(1000);
    $("#datos-despegable").hide();
    $("#reservas-despegable").hide();

});
//carga al iniciar la pagina
cargarTablaDatos();
cargarTablaReserva();
// cargarTablaVehiculos();

</script>
</body>

</html>
