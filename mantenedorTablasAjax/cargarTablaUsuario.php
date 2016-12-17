
                        <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">

                            <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
                     <script>
                               function cargarDatosModal(fila){

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

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificar">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar Usuario</h3>
                                          </div>
                                          <!-- Comienzo formulario -->
                 <div class="container">
                    <form id="formModificarUsuario" name="formModificarUsuario">
                            <fieldset>

                              <br>

                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="run">Run:</label>
                                            <input class="form-control" id="txt_run_modificar"  readonly name="txt_run_modificar" placeholder="Rut Usuario" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombre">Nombre:</label>
                                            <input class="form-control" id="txt_nombre_modificar" name="txt_nombre_modificar" placeholder="Nombre Usuario" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="apellido">Apellido:</label>
                                            <input class="form-control" id="txt_apellido_modificar" name="txt_apellido_modificar" placeholder="Apellido Usuario" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="contraseña">Contraseña:</label>
                                            <input class="form-control" id="txt_contraseña_modificar" name="txt_contraseña_modificar" placeholder="Contraseña Usuario" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="telefono">Télefono:</label>
                                            <input class="form-control" id="txt_telefono_modificar" name="txt_telefono_modificar" placeholder="Ej. 999999999" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="correo">Correo:</label>
                                            <input class="form-control" id="txt_correo_modificar" name="txt_correo_modificar" placeholder="algo@figuesep.cl" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="tipoUsuario">Tipo Usuario:</label>
                                                 <select class="form-control" name="cmb_tipo_modificar" id="cmb_tipo_modificar">
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

                                <div class="row">
                                  <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="estado">Estado usuario:</label>
                                                 <select class="form-control" name="cmb_estado_modificar" id="cmb_estado_modificar">
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
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success" data-toggle="modal" value="Guardar cambios" name="btn_registrar">Modificar</button>

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

                                <!-- Termino ventana modal -->

                            </div>  <!-- table -->

                            <script>


    $('#modificar').click(function(){
        $('.modal-backdrop').fadeOut('fast');
    });



                    $("#formModificarUsuario").submit(function(){//captura cuando se envia el formulario
                        event.preventDefault();//detiene el envio del formulario


                    if($("#txt_run_modificar").val()=="" || $("#txt_nombre_modificar").val()=="" || $("#txt_apellido_modificar").val()=="" ||
                     $("#txt_telefono_modificar").val()=="" || $("#txt_correo_modificar").val()=="" || $("#txt_contraseña_modificar").val()==""){
                         alert("No puede dejar campos vacios");
                    }else{

                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=1&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formModificarUsuario").serialize(),
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaUsuario();
                                                eventoAlertActualizar();
                                        }
                                    });
                                    return false;
                                  }
                            });


             function eventoAlertActualizar(){
                swal("Exito!", "Se ha actualizado correctamente!", "success")
                 // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
                }



                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                  function eliminarUsuario(id){
                                    // alert(id);
                                    swal({
                                        title: "Eliminar?",
                                        text: "Usuario!",
                                        type: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#DD6B55",
                                        confirmButtonText: "Yes, cambiar estado!",
                                        cancelButtonText: "Cancelar!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false },
                                        function(isConfirm){
                                            if (isConfirm) {
                                                 $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                                    url:"mantenedoresIngresar.php?mant=1&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                                    data:"id="+id,
                                                    success:function(respuesta){
                                                            // alert(respuesta);
                                                            cambiarPagina(1);
                                                            cargarDivTablaUsuario();
                                                    }
                                                });
                                                swal("Modificado!", "", "success");
                                            } else {
                                                swal("Cancelado", "", "error");
                                            }
                                        });



                                }


    </script>
