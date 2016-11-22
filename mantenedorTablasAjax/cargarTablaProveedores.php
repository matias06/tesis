  
                            </div> 

                            <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
                           
                            <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
                     <script>
                               function cargarDatosModal(fila){
                                
                                            $("#txt_rut_modificar").val($("#txt_rut"+fila).html());
                                            $("#txt_razon_social_modificar").val($("#txt_razon_social"+fila).html());
                                            $("#txt_direccion_modificar").val($("#txt_direccion"+fila).html());
                                            $("#txt_telefono_modificar").val($("#txt_telefono"+fila).html());
                                            $("#txt_correo_modificar").val($("#txt_correo"+fila).html());
                                            $("#id_estado").val($("#id_estado"+fila).html());   
                                            $("#cmb_estado_modificar").val($("#id_estado"+fila).html()); 
                                                                                   
                 
                                }
                        </script>

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificar">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar proveedor</h3>
                                          </div>
                                          <!-- Comienzo formulario -->
                 <div class="container">                       
                    <form id="formModificarProveedor" name="formModificarProveedor" method="post">
                            <fieldset>
                              <!--campos ocultos para guardar -->
                                <input type="hidden" id="id_estado" name="id_estado" >
                               
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="rut">Rut:</label>
                                            <input class="form-control" id="txt_rut_modificar" name="txt_rut_modificar" placeholder="Rut Usuario" type="text">
                                        </div>
                                    </div>
                                 </div>
                                <div class="row">     
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="razon_social">Razón social:</label>
                                            <input class="form-control" id="txt_razon_social_modificar" name="txt_razon_social_modificar" placeholder="Razón social" type="text">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">    
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="direccion">Dirección:</label>
                                            <input class="form-control" id="txt_direccion_modificar" name="txt_direccion_modificar" placeholder="Dirección" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">     
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono:</label>
                                            <input class="form-control" id="txt_telefono_modificar" name="txt_telefono_modificar" placeholder="Numero teléfonico" type="">
                                        </div>
                                    </div>
                                </div>     
                               
                                <div class="row">
                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="txt_correo">Correo electrónico:</label>
                                            <input class="form-control" id="txt_correo_modificar" name="txt_correo_modificar" placeholder="Correo electrónico" type="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="estado">Estado</label>
                                                 <select class="form-control" name="cmb_estado_modificar" id="cmb_estado_modificar">
                                                    <?php 
                                                        require_once '../clases/claseEstado.php';
                                                        $est= new Estado();
                                                        $filasEst= $est->listarEstado();

                                                        foreach($filasEst as $tipo){
                                                            echo '<option value="'.$tipo['id_estado'].'" >'.$tipo['descripcion_estado'].'</option>';
                                                        }

                                                     ?>
                                                </select> 

                                        </div>

                                    </div>
                                </div>
                               <div class="container">
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modificar" id="modificar" >Modificar</button>

                                        </div>
                                    </div>

                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                               <!-- <input type="submit" class="btn btn-success" data-dismiss="modal" data-target="#modificar">Modificar</button> -->
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
 </div>
                            <script>

                             $("#formModificarProveedor").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario
                                    //alert("enviado");
                                    //alert(resultado);
                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                        
                                        url:"mantenedoresIngresar.php?mant=3&prov=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data: $("#formModificarProveedor").serialize(),
                                        success:function(resultado){
                                             
                                               // $("#formModificarProveedor").html(resultado);
                                                  
                                                   cargarDivTablaProveedores();
                                                   cambiarPagina(1);
                                                   eventoAlertActualizar();
           
                                        }
                                    });
                                   
                            });
                                
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

                              