<div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
    <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
        <script>
            function cargarDatosModal(fila){
                $("#txt_idciudad_modificar").val($("#txt_idciudad"+fila).html());
                $("#txt_nombreCiudad_modificar").val($("#txt_nombreCiudad"+fila).html());
                $("#cmb_region_modificar").val($("#txt_idregion"+fila).html());
            }
        </script>

<!-- Ventana modal -->
<!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
<div class="modal fade" id="modificarCiudad">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Modificar Ciudad</h3>
          </div>
<!-- Comienzo formulario -->
         <div class="modal-body">
            <form id="formModificarCiudad" name="formModificarCiudad">
                <fieldset>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="run">Numero Ciudad:</label>
                                <input class="form-control" id="txt_idciudad_modificar"  readonly name="txt_idciudad_modificar" placeholder="Numero Ciudad" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="nombre">Ciudad:</label>
                                <input class="form-control" id="txt_nombreCiudad_modificar" name="txt_nombreCiudad_modificar" placeholder="Ciudad" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                            <div class="form-group">
                                <label for="region">Region</label>
                                <select class="form-control" name="cmb_region_modificar" id="cmb_region_modificar">
                                <?php
                                require_once '../clases/claseRegion.php';
                                $region= new Region();
                                $filasReg= $region->listarRegion();
                                foreach($filasReg as $regi){
                                echo '<option value="'.$regi['id_region'].'" >'.$regi['nombre_region'].'</option>';
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-8">
                        <button id="modificar" type="submit" class="btn btn-success" data-toggle="modal" value="Guardar cambios" name="btn_registrar">Modificar</button>
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
                            $("#formModificarCiudad").submit(function(){//captura cuando se envia el formulario
                            event.preventDefault();//detiene el envio del formulario

                            if($("#txt_nombreCiudad_modificar").val()==""){
                                 alert("No puede dejar campos vacios");
                            }else{

                                $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                url:"mantenedoresIngresar.php?mant=6&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                data:$("#formModificarCiudad").serialize(),
                                success:function(respuesta){

                                cambiarPagina(1);
                                cargarDivTablaCiudad();
                                eventoAlertActualizar();
                                                                }
                                                            });
                                                            return false;
                                                          }
                                                    });


                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                function eliminarCiudad(id){
                                    // alert(id);
                                    swal({
                                        title: "Eliminar Ciudad?",
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

                                        url:"mantenedoresIngresar.php?mant=6&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaCiudad();
                                                eventoAlertEliminar();
                                   }
                                                });
                                                swal("Eliminado", "", "success");
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


 function eventoAlertEliminar(){
    swal("Exito!", "Se ha eliminado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script>
