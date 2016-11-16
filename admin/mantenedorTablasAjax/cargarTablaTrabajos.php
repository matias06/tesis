<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
   <div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
    <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
        <script>
            function cargarDatosModal(fila){
                $("#txt_idtrabajo_modificar").val($("#txt_idTrabajo"+fila).html());
                $("#txt_nombreTrabajo_modificar").val($("#txt_nombreTrabajo"+fila).html());
                $("#txt_descripcionTrabajo_modificar").val($("#txt_descripcionTrabajo"+fila).html());
                $("#txt_costo_modificar").val($("#txt_costo"+fila).html());
                $("#cmb_servicio_modificar").val($("#txt_idServicio"+fila).html());
            }
        </script>

<!-- Ventana modal -->
<!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
<div class="modal fade" id="modificarTrabajo">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Modificar Trabajo</h3>
          </div>
<!-- Comienzo formulario -->
         <div class="modal-body">                       
            <form id="formModificarTrabajo" name="formModificarTrabajo">
                <fieldset>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="run">Numero Trabajo:</label>
                                <input class="form-control" id="txt_idtrabajo_modificar"  readonly name="txt_idtrabajo_modificar" placeholder="Numero Trabajo" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="nombre">Trabajo:</label>
                                <input class="form-control" id="txt_nombreTrabajo_modificar" name="txt_nombreTrabajo_modificar" placeholder="Trabajo" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="descripcion">Detalle Trabajo:</label>
                                <input class="form-control" id="txt_descripcionTrabajo_modificar" name="txt_descripcionTrabajo_modificar" placeholder="Detalle" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="costo">Valor:</label>
                                <input class="form-control" id="txt_costo_modificar" name="txt_costo_modificar" placeholder="$$$$$$" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="servicio">Servicio</label>
                                <select class="form-control" name="cmb_servicio_modificar" id="cmb_servicio_modificar">
                                <?php 
                                require_once '../clases/claseServicio.php';
                                $serv= new Servicio();
                                $filasServ= $serv->listarServicio();
                                foreach($filasServ as $servicio){
                                echo '<option value="'.$servicio['id_servicio'].'" >'.$servicio['descripcion_servicio'].'</option>';
                                }
                                ?>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-8">
                        <button id="modificar" type="submit" class="btn btn-success" data-toggle="modal" data-target="#modificarTrabajo" value="Guardar cambios" name="btn_registrar">Modificar</button>
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
</div><!-- Termino ventana modal -->
                        
                                        
<script>
    $("#formModificarTrabajo").submit(function(){//captura cuando se envia el formulario
    event.preventDefault();//detiene el envio del formulario

        $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
        url:"mantenedoresIngresar.php?mant=8&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
        data:$("#formModificarTrabajo").serialize(),
        success:function(respuesta){
        
        cambiarPagina(1);
        cargarDivTablaTrabajo();
        eventoAlertActualizar();
                                        }
                                    });
                                    return false;
                            });


                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                function eliminarTrabajo(id){
                                    // alert(id);
                                    swal({   
                                        title: "Eliminar?",   
                                        text: "Trabajo!",   
                                        type: "warning",   
                                        showCancelButton: true,   
                                        confirmButtonColor: "#DD6B55",   
                                        confirmButtonText: "Si, Eliminar trabajo!",   
                                        cancelButtonText: "Cancelar!",   
                                        closeOnConfirm: false,   
                                        closeOnCancel: false }, 
                                        function(isConfirm){   
                                            if (isConfirm) {   

                                     $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=8&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaTrabajo();
                                         }
                                                });  
                                                swal("Eliminado!", "", "success");   
                                            } else {    
                                                swal("Cancelado", "", "error");   
                                            } 
                                        });

                            
                                     
                                }


    
    $('#modificar').click(function(){
        $('.modal-backdrop').fadeOut('fast');
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