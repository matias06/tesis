
                        <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">

                            <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
                     <script>
                               function cargarDatosModal(fila){

                                $("#txt_patente_modificar").val($("#txt_patente"+fila).html());
                                $("#txt_marca_modificar").val($("#txt_marca"+fila).html());
                                $("#txt_modelo_modificar").val($("#txt_modelo"+fila).html());
                                $("#txt_run_modificar").val($("#txt_run"+fila).html());



                                }
                        </script>

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificar">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar Vehiculo</h3>
                                          </div>
                                          <!-- Comienzo formulario -->
                 <div class="container">
                    <form id="formModificarVehiculo" name="formModificarVehiculo">
                            <fieldset>
                              <br>
                              <div class="row">
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="patente">Patente:</label>
                                          <input class="form-control"  onBlur="validarRun(this)" readonly title="Debe ingresar número patente" required id="txt_patente_modificar" name="txt_patente_modificar" placeholder="Número patente" type="text">
                                      </div>
                                </div>
                              </div>
                                <div class="row">
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="nombre">Marca</label>
                                          <input class="form-control" title="Debe ingresar su marca" required id="txt_marca_modificar" name="txt_marca_modificar" placeholder="Ingresa marca" type="text">
                                      </div>
                                  </div>
                                </div>
                                  <div class="row">
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="apellido">Modelo</label>
                                          <input class="form-control" title="Debe ingresar su modelo" required id="txt_modelo_modificar" name="txt_modelo_modificar" placeholder="Ingresar modelo" type="text">
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="tipoUsuario">Run Usuario</label>
                                               <select class="form-control" name="cmb_usuario_modificar" id="cmb_usuario_modificar">
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
                                 <div class="container">
                                      <div class="col-md-3">
                                          <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">

                                      </div>
                                  </div>
                                  <!--BOTON QUE ABRE MODAL DE CREAR NUEVO -->
                              <div class="row">
                              <br>
                              <div id="contenedorMantenedor"></div><!-- DIV DONDE SE CARGA LA TABLA-->
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

                                <!-- Termino ventana modal -->

                            </div>  <!-- table -->

                            <script>


    $('#modificar').click(function(){
        $('.modal-backdrop').fadeOut('fast');
    });

                             $("#formModificarVehiculo").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=12&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formModificarVehiculo").serialize(),
                                        success:function(respuesta){
                                                //alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaVehiculo();
                                                eventoAlertActualizar();
                                        }
                                    });
                                    return false;
                            });


             function eventoAlertActualizar(){
                swal("Exito!", "Se ha actualizado correctamente!", "success")
                 // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
                }



                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                  function eliminarVehiculo(id){
                                    //alert(id);
                                    swal({
                                        title: "Eliminar?",
                                        text: "Vehiculo!",
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

                                                    url:"mantenedoresIngresar.php?mant=12&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                                    data:"id="+id,
                                                    success:function(respuesta){
                                                            //alert(respuesta);
                                                            cambiarPagina(1);
                                                            cargarDivTablaVehiculo();
                                                    }
                                                });
                                                swal("Modificado!", "", "success");
                                            } else {
                                                swal("Cancelado", "", "error");
                                            }
                                        });



                                }


    </script>
