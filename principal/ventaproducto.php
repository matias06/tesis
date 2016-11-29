<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Proveedores</title>
  <?php   cargarHeader(); ?>

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
<div class="content-central">



<div class="container">

  <div class="col-xs-12 col-sm-6 col-md-6">
      <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="230" height="60"></a>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 tablaHead">
    <script type="text/javascript">
    var d=new Date();
    var dia=new Array(7);
    dia[0]="Domingo";
    dia[1]="Lunes";
    dia[2]="Martes";
    dia[3]="Miercoles";
    dia[4]="Jueves";
    dia[5]="Viernes";
    dia[6]="Sabado";
    document.write("" + dia[d.getDay()]);

    var d = new Date();
    document.write(' '+d.getDate(),' / '+d.getMonth(), ' / '+d.getFullYear(),'<br>Hora: '+d.getHours(),' : '+d.getMinutes(),' : '+d.getSeconds());
    </script>
  </div>
</div>


<section class="sobre_nosotros">

<div class="container">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="text-center titleh2">
            Venta Productos
          </h2>
    </div>


</div>
</section>
<br>

<div class="row">
  <div class="col-xs-12">
    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
        <div class="form-group">
            <label for="run">Vendedor:</label>
            <input class="form-control"  onBlur="validarRun(this) " title="Debe ingresar un rut valido" required id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
        </div>
    </div>
</div>
    </div>
<div class="row">
  <div class="col-xs-12">
    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
        <div class="form-group">
            <label for="nombre">Cliente</label>
            <input class="form-control" title="Debe ingresar su nombre" required id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">

        <button type="button" data-toggle="modal" data-target="#ventanaModalCrear" class="btn btn-warning">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </div>
    </div>
  </div>
  </div>

  <div class="col-xs-12 col-md-12">
              <div class="table-responsive">
                  <table class="table table-bordered table-hover table-condensed tablaGeneral">
                          <thead class="active danger tablaHead">
                              <th>Código producto</th>
                              <th>Nombre producto</th>
                              <th>Valor unitario</th>
                              <th>Cantidad</th>
                              <th>Valor Total</th>
                          </thead>



                  </table>
              </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
            <div class="form-group">
                <label for="nombre">Total venta:</label>
                <textarea class="form-control col-xs-12" id="mensaje"  placeholder=""></textarea>
        </div>
      </div>
      </div>
<br>
<br>
<br>
      <div class="container">
              <div class="col-md-3">
                  <input type="submit" id="btn_insert" class="btn btn-success" value="Aceptar" name="btn_registrar">

              </div>
          </div>


          <!-- MODAL NUEVO  NO SE MUESTRA HASTA QUE SE PRESIONA EL BOTON NUEVO-->
      <div class="modal fade" id="ventanaModalCrear" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Crear Usuario</h4>
            </div>
            <div id="modbody" class="modal-body">

              <form action="" id="formularioRegistro" name="formularioRegistro" method="POST">
                  <fieldset>

                      <div class="row">
                          <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                              <div class="form-group">
                                  <label for="run">Run:</label>
                                  <input class="form-control" title="Debe ingresar un rut valido" required id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
                              </div>

                          </div>
                          <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                              <div class="form-group">
                                  <label for="nombre">Nombre</label>
                                  <input class="form-control" title="Debe ingresar su nombre" required id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
                              </div>
                          </div>
                          <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                              <div class="form-group">
                                  <label for="apellido">Apellido</label>
                                  <input class="form-control" title="Debe ingresar su apellido" required id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
                              </div>
                          </div>


                      </div>


                      <div class="row">

                           <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                              <div class="form-group">
                                  <label for="apellido">Contraseña</label>
                                  <input class="form-control" title="Debe ingresar contraseña" required id="txt_password" name="txt_password" placeholder="Contraseña Usuario" type="password">
                              </div>

                          </div>


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

                          <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                              <div class="form-group">

                                  <label for="estado">Estado usuario</label>
                                       <select class="form-control" name="estadousuario" id="">
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


                      </div>
                      <div class="container">
                              <div class="col-md-3">
                                  <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">

                              </div>
                          </div>


                  </fieldset>
              </form>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
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

                             //alert(respuesta);
                             //$("#formularioProveedor").html(respuesta);

                             eventoAlertCorrecto();

                     }
                 });
                 return false;
         });



         function eventoAlertCorrecto(){
         swal("Exito!", "Se ha agregado correctamente!", "success")
         }

            </script>
