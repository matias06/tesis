
                        <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
                           
                            <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
                     <script>
                               function cargarDatosModal(fila){
                                $("#id_servicio").val($("#id_servicio"+fila).html());
                                $("#txt_idServicio_modificar").val($("#txt_idServicio"+fila).html());
                                $("#txt_descripcionServicio_modificar").val($("#txt_descripcionServicio"+fila).html());               
                 
                                }
                        </script>

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificarServicio">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar Servicio</h3>
                                          </div>
                                        
                                            <div class="modal-body">     
                                              <!-- Comienzo formulario -->                  
                                              <form id="formModificarServicio" name="formModificarServicio">
                                                    <fieldset>

                                          <!--campos ocultos para guardar -->
                                             <!--<input type="hidden" id="id_servicio" name="id_servicio" > -->
                                                    <div class="row">
                                                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                                            <div class="form-group">
                                                                <label for="run">Numero Servicio:</label>
                                                                <input class="form-control" id="txt_idServicio_modificar"  readonly name="txt_idServicio_modificar" placeholder="Numero Servicio" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                                            <div class="form-group">
                                                                <label for="nombre">Servicio:</label>
                                                                <input class="form-control" id="txt_descripcionServicio_modificar" name="txt_descripcionServicio_modificar" placeholder="Servicio" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <!-- <div class="row">
                                                      <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                                          <div class="form-group">
                                                              <label for="servicio">Servicio</label>
                                                                <select class="form-control" name="txt_descripcionServicio_modificar" id="txt_descripcionServicio_modificar">
                                                                      <?php 
                                                              require_once '../clases/claseServicio.php';
                                                              $serv= new Servicio();
                                                              $filasServ= $serv->listarServicio();

                                                              foreach($filasServ as $tipo){
                                                                  echo '<option value="'.$tipo['id_servicio'].'" >'.$tipo['descripcion_servicio'].'</option>';
                                                        }
                                                                      ?>
                                                          </select> 
                                                    </div>
                                                    </div>
                                                </div> -->
                                                     <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modificarServicio" id="modificar" value="Guardar cambios" name="btn_registrar">Modificar</button>
                                                    </fieldset>
                                                </form>
                                            </div> 

                                          <!-- Fin formulario -->
                                          <div class="modal-footer">
                                             <div class="col-md-8">
                                                       
                                                    </div>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
                                          </div>
                                          
                                       </div>
                                   </div> 
                                </div>

                                <!-- Termino ventana modal -->
                        
                                        

                            </div>  <!-- table -->

                            <script>

                             $("#formModificarServicio").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=7&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formModificarServicio").serialize(),
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaServicio();
                                                eventoAlertActualizar();
                                        }
                                    });
                                    return false;
                            });


                // dejar inactivo a un servicio
                              //  $("#formModificarUsuario").validate();

                                function eliminarServicio(id){
                                    // alert(id);
                                     swal({   
                                        title: "Eliminar?",   
                                        text: "Usuario!",   
                                        type: "warning",   
                                        showCancelButton: true,   
                                        confirmButtonColor: "#DD6B55",   
                                        confirmButtonText: "Yes, cambiar estado!",   
                                        cancelButtonText: "No, cancelar!",   
                                        closeOnConfirm: false,   
                                        closeOnCancel: false }, 
                                        function(isConfirm){   
                                            if (isConfirm) {   

                                     $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=7&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaServicio();
                                                eventoAlertEliminar();
                                       }
                                                });  
                                                swal("Eliminado!", "", "success");   
                                            } else {    
                                                swal("Cancelado", "", "error");   
                                            } 
                                        });

                            
                                     
                                }
                                /*Aquí se le da la propiedad al boton modificar para que cierre el modal*/
                                $('#modificar').click(function(){
                                    $('.modal-backdrop').hide()
                                });
                                
                        </script> 
                        
<script>
 function eventoAlertActualizar(){
    swal("Exito!", "Se ha actualizado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script>   
    <script>
 function eventoAlertEliminar(){
    swal("Exito!", "Se ha eliminado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script> 