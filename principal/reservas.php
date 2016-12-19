<?php
  include '../comun/comun.php';
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
   <title>Reservas</title>
  <?php   cargarHeader(); ?>
</head>
<body>
  <header>
    <?php cargarMenuSD(); ?>
  </header>
<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
        <div class="container-fluid">
          <br>
          <br>
          <div class="col-xs-12 col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-condensed tablaGeneral">
                                  <thead class="active danger tablaHead">
                                      <th>Número</th>
                                      <th>Run Usuario</th>
                                      <th>Patente</th>
                                      <th>Marca</th>
                                      <th>Modelo</th>
                                      <th>Servicio</th>
                                      <th>Detalle</th>
                                      <th>Fecha</th>
                                      <th>Hora</th>
                                      <th>Estado</th>
                                      <th>Procedimiento</th>

                                  </thead>
                                  <tbody id="cargarReservas">

                                  </tbody>


                          </table>
                      </div>
            </div>
        </div>

        <script>
            function cargarDatosModal(fila){
                $("#txt_id_reserva_modificar").val($("#txt_id_reserva"+fila).html());
                $("#cmb_estado_reserva").val($("#txt_id_estado_reserva"+fila).html());
            }
        </script>

        <!-- Ventana modal -->
        <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
        <div class="modal fade" id="modificarEstado">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Evaluar Reserva</h3>
          </div>
        <!-- Comienzo formulario -->
         <div class="modal-body">
            <form id="formModificarReserva" name="formModificarReserva">
                <fieldset>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="run">Numero Reserva:</label>
                                <input class="form-control" id="txt_id_reserva_modificar"  readonly name="txt_id_reserva_modificar" placeholder="Numero Ciudad" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="region">Estado Reserva</label>
                                <select class="form-control" name="cmb_estado_modificar" id="cmb_estado_modificar">
                                <?php
                                require_once '../clases/claseestadoReserva.php';
                                $res= new EstadoReserva();
                                $filasReg= $res->listarEstadoReserva();
                                foreach($filasReg as $estado){
                                echo '<option value="'.$estado['id_estado_reserva'].'" >'.$estado['descripcion_estado_reserva'].'</option>';
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-8">
                        <button id="modificar" type="submit" class="btn btn-success" data-toggle="modal" value="Guardar cambios" name="btn_registrar">Guardar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- Fin formulario -->
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
        </div>
        </div>
        </div>
        </div>


<script type="text/javascript">
$.ajax({
    url:'../mantenedorTablasAjax/cargarTablaReservas.php',
    success:function(resultado){
    $("#cargarReservas").html(resultado);

      }
});
</script>

<script type="text/javascript">
$("#formModificarReserva").submit(function(){//captura cuando se envia el formulario
event.preventDefault();//detiene el envio del formulario


    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
    url:"modificarReserva.php", // donde se va a ingresar "mantenedoresIngresar.php"
    data:$("#formModificarReserva").serialize(),
    success:function(respuesta){
</script>


</body>
</html>
