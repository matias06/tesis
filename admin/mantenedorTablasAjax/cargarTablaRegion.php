
                        <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
                           
                            <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
                     <script>
                               function cargarDatosModal(fila){
                                
                                $("#txt_idregion_modificar").val($("#txt_idregion"+fila).html());
                                $("#txt_nombreRegion_modificar").val($("#txt_region"+fila).html());               
                 
                                }
                        </script>

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificarRegion">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar Region</h3>
                                          </div>
                                          <!-- Comienzo formulario -->
                                            <div class="modal-body">                       
                                              <form id="formModificarRegion" name="formModificarRegion">
                                                    <fieldset>
                                                    <div class="row">
                                                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                                            <div class="form-group">
                                                                <label for="run">Numero Region:</label>
                                                                <input class="form-control" id="txt_idregion_modificar"  readonly name="txt_idregion_modificar" placeholder="Numero Region" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                                            <div class="form-group">
                                                                <label for="nombre">Nombre Region:</label>
                                                                <input class="form-control" id="txt_nombreRegion_modificar" name="txt_nombreRegion_modificar" placeholder="Nombre Region" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modificarRegion" id="modificar" value="Guardar cambios" name="btn_registrar">Modificar</button>
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

                             $("#formModificarRegion").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=5&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formModificarRegion").serialize(),
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaRegion();
                                                eventoAlertActualizar();
                                        }
                                    });
                                    return false;
                            });


                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                function eliminarRegion(id){
                                    // alert(id);
                                     swal({   
                                        title: "Eliminar?",   
                                        text: "Region!",   
                                        type: "warning",   
                                        showCancelButton: true,   
                                        confirmButtonColor: "#DD6B55",   
                                        confirmButtonText: "Eliminar",   
                                        cancelButtonText: "Cancelar",   
                                        closeOnConfirm: false,   
                                        closeOnCancel: false }, 
                                        function(isConfirm){   
                                            if (isConfirm) {   
                                     $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=5&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaRegion();
                                                eventoAlertEliminar();
                                  }
                                                });  
                                                swal("Eliminado", "", "success");   
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