<?php
      // include '../comun/comun.php';
    require_once '../clases/Conexion.php';
    require_once '../clases/clasevehiculo.php';
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
                    <a href="#" value="datos" class="mini-u-btn" id="misdatos" onclick="cargarTablaDatos();">Mis Datos</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-calendar-o fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" class="mini-u-btn" id="misreservas" onclick="cargarTablaReserva();">Mis Reservas</a>
                </div>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="mini-u">

                <div class="mini-u-contenido">
                    <i class="fa fa-car fa-3x"></i>
                </div>

                <div class="mini-u-footer">
                    <a href="#" value="vehiculo" class="mini-u-btn" id="misautos" onclick="cargarTablaVehiculos();">Mis Vehiculos</a>


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
                                    <input type="text" class="form-control" readonly id="txt_run_modificar" name="txt_run_modificar" placeholder="Modifique su run">
                                </div>
                                </div>
                                </div>
                                  <div class="row">
                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre_modificar" name="txt_nombre_modificar" placeholder="Modifique su nombre">
                                </div>
                                </div>

                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" class="form-control" id="txt_apellido_modificar" name="txt_apellido_modificar" placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>

                                <div class="row">
                              <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                  <div class="form-group">
                                    <label for="nombre">Contraseña:</label>
                                    <input type="text" class="form-control" id="txt_contraseña_modificar" name="txt_contraseña_modificar" placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                    <div class="form-group">
                                    <label for="nombre">Teléfono</label>
                                    <input type="text" class="form-control" id="txt_telefono_modificar" name="txt_telefono_modificar" placeholder="Modifique su nombre">
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                 <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                    <label for="correo">Correo</label>
                                      <input type="text" class="form-control" id="txt_correo_modificar" name="txt_correo_modificar" placeholder="Modifique su correo">
                                </div>
                                </div>
                            </div>
                            <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                <div class="form-group">

                                    <!-- <label for="tipoUsuario">Tipo Usuario</label> -->
                                         <select class="form-control hidden" name="cmb_tipo_modificar" id="cmb_tipo_modificar">
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
                                         <select class="form-control hidden" name="cmb_estado_modificar" id="cmb_estado_modificar">
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
                                    <!-- <button id="modal-datos" type="submit" class="btn btn-primary" data-toggle="modal" data-target="modal-datos" value="Guardar Cambios" name="btn_datos">Modificar</button> -->
                                    <button id="modal-datos" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-datos" value="Modificar datos" name="btn_guardar">Crear</button>

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

            <table class="table table-responsive">
                <tr>
                  <th>Run</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Password</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Modificar</th>

                </tr>
              <tbody id="cargarDatos">

              </tbody>
            </table>


        </div>

        <div class="despegable-menu" id="reservas-despegable">

            <span><b>Mis Reservas</b></span>
            <br>


                             <div class="modal fade" id="modal-auto"><!--modal para agregar vehiculo -->
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Agregar Un Nuevo automovil</h4>
                                        </div>
                                        <div class="modal-body">

                                        <form id="formModReservas" name="formModReservas" method="POST" role="form">

                                            <div class="form-group">
                                                <label for="">Patente</label>
                                                <input type="text" class="form-control" id="txt_patenteReserva_modificar" name="txt_patenteReserva_modificar" placeholder="Input field">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Marca</label>
                                                <input type="text" class="form-control" id="txt_marcaReserva_modificar" name="txt_marcaReserva_modificar" placeholder="Input field">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Modelo</label>
                                                <input type="text" class="form-control" id="txt_modeloReserva_modificar" name="txt_modeloReserva_modificar" placeholder="Input field">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Servicio</label>
                                                <input type="text" class="form-control" id="txt_descripcionServicioReserva_modificar" name="txt_descripcionServicioReserva_modificar" placeholder="Input field">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Problema</label>
                                                <input type="text" class="form-control" id="txt_descripcionProblemaReserva_modificar" name="txt_descripcionProblemaReserva_modificar" placeholder="Input field">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Descripcion Estado reserva</label>
                                                <input type="text" class="form-control" id="txt_descripcionEstadoReserva_modificar" name="txt_descripcionEstadoReserva_modificar" placeholder="Input field">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <!-- <button type="button" class="btn btn-primary">Guardar Cambios</button> -->
                                            <button id="modal-auto" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-auto" value="Guardar Cambios" name="btn_registrar">Modificar</button>

                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div> <!-- final modal para agregar nuevo vehiculo -->


                  <table class="table table-responsive">
                      <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Servicio</th>
                        <th>Problema</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                      </tr>
                    <tbody id="cargarReservas">

                    </tbody>
                  </table>

            </div>
            <div class="despegable-menu" id="autos-despegable">

                   <span class="lead">Mis Automoviles
                       <!-- <a class="btn btn-info btn-xs" data-toggle="modal" href='#modal-auto'><i class="fa fa-plus-circle fa-1g"></i>  Agregar Autos</a> -->
                   </span>
                   <div class="modal fade" id="modal-modificar-auto">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title">Modificacion del Vehiculo</h4>
                               </div>
                               <div class="modal-body">

                               <form id="formModificarVehiculo"  name="formModificarVehiculo">

                                   <div class="form-group">
                                       <label for="patente">Patente</label>
                                       <input type="text" class="form-control" readonly id="txt_patente_modificar" name="txt_patente_modificar" placeholder="Modifique su patente">
                                   </div>

                                   <div class="form-group">
                                       <label for="marca">Marca</label>
                                       <input type="text" class="form-control" id="txt_marca_modificar" name="txt_marca_modificar" placeholder="Modifique su marca">
                                   </div>
                                   <div class="form-group">
                                       <label for="modelo">Modelo</label>
                                       <input type="text" class="form-control" id="txt_modelo_modificar" name="txt_modelo_modificar" placeholder="Modifique su modelo">
                                   </div>
                                   <div class="form-group">
                                       <label for="modelo">Run</label>
                                       <input type="text" class="form-control" readonly id="txt_runVehiculo_modificar" name="cmb_usuario_modificar" placeholder="Modifique su modelo">
                                   </div>
                                   <div class="form-group">
                                       <button id="modal-modificar-auto" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-modificar-auto" value="Guardar Cambios" name="btn_registrar">Modificar</button>
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
                                             <input class="form-control"  onBlur="validarRun(this) " title="Debe ingresar número patente" required id="txt_patente" name="txt_patente" placeholder="Número patente" type="text">
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

                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                         <div class="form-group">
                                             <label for="tipoUsuario">Run Usuario</label>
                                                  <select class="form-control" name="cmb_usuario" id="cmb_usuario">
                                                     <?php
                                                         require_once '../clases/usuario.php';
                                                         $User= new Usuario();
                                                         $filasUser= $User->listarRunUsuario();

                                                         foreach($filasUser as $tipo){
                                                             echo '<option value="'.$tipo['run'].'" >'.$tipo['nombre'].'</option>';
                                                         }
                                                      ?>
                                                 </select>
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
                   <table class="table table-responsive">
                       <tr>
                         <th>Patente</th>
                         <th>Marca</th>
                         <th>Modelo</th>
                         <th>Run</th>
                         <th>Crear</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                       </tr>
                     <tbody id="cargarVehiculos">

                     </tbody>
                   </table>





                 <!-- modal modificacion del vehiculo-->



               </div>


           </div><!-- final contenido del menu seleccionado-->



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
<!-- <script src="../js/validar_sesion.js"></script> -->
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

// Carga la informacion a el div cargarDatos desde cargarTablaClientes
           function cargarTablaDatos(){
            $.ajax({
              url:'../cliente/cargarTablaCliente.php',
              success:function(resultado){
                $("#cargarDatos").html(resultado);
                }
            });
        }

</script>
<script>
       function cargarMisReservas(fila){
        $("#txt_id_reserva_modificar").val($("#txt_id_reserva"+fila).html());
        $("#txt_patenteReserva_modificar").val($("#txt_patente"+fila).html());

        $("#txt_runReserva_modificar").val($("#txt_runReserva"+fila).html());
        $("#txt_patente_modificar").val($("#txt_patente"+fila).html());
        $("#txt_marcaReserva_modificar").val($("#txt_marca"+fila).html());
        $("#txt_modeloReserva_modificar").val($("#txt_modelo"+fila).html());

        $("#txt_id_servicio_modificar").val($("#txt_id_servicio"+fila).html());
        $("#txt_descripcionServicioReserva_modificar").val($("#txt_servicio"+fila).html());

        $("#txt_descripcionProblemaReserva_modificar").val($("#txt_problema"+fila).html());
        $("#txt_id_estado_reserva_modificar").val($("#txt_id_estado_reserva"+fila).html());
        $("#txt_descripcionEstadoReserva_modificar").val($("#txt_descripcion_estado"+fila).html());

        }
</script>

<script type="text/javascript">
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

        $("#cmb_usuario").val($("#txt_runvehiculo"+fila).html());
       }


</script>
<script type="text/javascript">
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
   //alert("hola");
       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=1&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#formModificarUsuario").serialize(),
           success:function(respuesta){
                   //alert(respuesta);
                  // alert("hola");
                  // cargarTablaVehiculos();
                  cargarTablaDatos();
           }
       });
       return false;
});

// MIS RESERVAS
$("#formModReservas").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario
  //  alert("hola");
       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=13&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#formModReservas").serialize(),
           success:function(respuesta){
                   alert(respuesta);
                  // alert("hola");
                  // cargarTablaVehiculos();
                  cargarTablaReserva();
           }
       });
       return false;
});




// MIS VEHICULOS

// CREAR VEHICULOS
$("#formularioCrearVehiculo").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario

       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=12&func=1",
           data:$("#formularioCrearVehiculo").serialize(),
           success:function(respuesta){
              cargarTablaVehiculos();
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
             alert(respuesta);
             if(respuesta==1){

             //alert("Vehiculo modificado");
                   //alert(respuesta);

          cargarTablaVehiculos();
        }
           }
       });
       return false;
});

  function eventoAlertActualizar(){
    // swal("Exito!", "Se ha actualizado correctamente!", "success")
    alert("Se ha modificado correctamente su vehiculo");
       }
// ELIMINAR VEHCULOS
       function eliminarVehiculo(id){

         //alert(id);
        //  swal({
        //      title: "Eliminar?",
        //      text: "Vehiculo!",
        //      type: "warning",
        //      showCancelButton: true,
        //      confirmButtonColor: "#DD6B55",
        //      confirmButtonText: "Eliminar!",
        //      cancelButtonText: "Cancelar!",
        //      closeOnConfirm: false,
        //      closeOnCancel: false },
        //      function(isConfirm){
        //          if (isConfirm) {
                      $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                         url:"../mantenedores/mantenedoresIngresar.php?mant=12&func=4", // donde se va a ingresar "mantenedoresIngresar.php"
                         data:"id="+id,
                         success:function(respuesta){
                             $("#formModificarVehiculo").html(respuesta);
                                 //alert(respuesta);
                                 //alert("hola");
                                  cargarTablaVehiculos();
                         }
                     });
            //          swal("Modificado!", "", "success");
            //      } else {
            //          swal("Cancelado", "", "error");
            //      }
            //  });



     }
</script>
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
//carga al iniciar la pagina
  cargarTablaDatos();
  cargarTablaReserva();
  cargarTablaVehiculos();
</script> -->
</body>

</html>
