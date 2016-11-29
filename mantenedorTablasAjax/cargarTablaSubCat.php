<div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">
    <div class="caption">
                           <!-- Esta funcion carga el modal para modificar datos de la tabla -->
        <script>
            function cargarDatosModal(fila){
                $("#txt_id_SubProducto_modificar").val($("#txt_id_SubProducto"+fila).html());
                $("#txt_subCat_modificar").val($("#txt_subCat"+fila).html());
                $("#cmb_SubCat_modificar").val($("#txt_idCat"+fila).html());

            }
        </script>

<!-- Ventana modal -->
<!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
<div class="modal fade" id="modificarSubCat">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title">Modificar Sub Categoría</h3>
          </div>
<!-- Comienzo formulario -->
         <div class="modal-body">
            <form id="formModificarSubCat" name="formModificarSubCat">
              <input type="hidden" id="txt_id_SubProducto_modificar" name="txt_id_SubProducto_modificar" >
                <fieldset>
                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                      <div class="form-group">
                          <label for="descripcionCat">Sub categoría:</label>
                          <input class="form-control" id="txt_subCat_modificar" name="txt_subCat_modificar" placeholder="Descripcion Sub categoría" type="text">
                      </div>
                  </div>
                    <div class="row">
                      <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                          <div class="form-group">
                              <label for="region">Categoría</label>
                                   <select class="form-control" name="cmb_SubCat_modificar" id="cmb_SubCat_modificar">
                                      <?php
                                          require_once '../clases/claseCategoriaProducto.php';
                                          $CatP= new CategoriaProducto();
                                          $filasCat= $CatP->listarCategoriaProducto();
                                          foreach($filasCat as $CategoriaProd){
                                              echo '<option value="'.$CategoriaProd['id_categoria_producto'].'" >'.$CategoriaProd['descripcion_categoria_producto'].'</option>';
                                          }
                                       ?>
                                  </select>
                          </div>
                      </div>

                    </div>
                    <div class="container">
                        <div class="col-md-8">
                        <button id="modificar" class="btn btn-success" data-toggle="modal" data-target="#modificarSubCat" value="Guardar cambios" name="btn_registrar">Modificar</button>
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
                            $("#formModificarSubCat").submit(function(){//captura cuando se envia el formulario
                            event.preventDefault();//detiene el envio del formulario

                                $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                url:"mantenedoresIngresar.php?mant=10&func=2", // donde se va a ingresar "mantenedoresIngresar.php"
                                data:$("#formModificarSubCat").serialize(),
                                success:function(respuesta){
                                //alert("hola");
                                      //alert(respuesta);
                                cambiarPagina(1);
                                cargarDivTablaSubCat();
                                eventoAlertActualizar();
                                                                }
                                                            });
                                                            return false;
                                                    });


                // dejar inactivo a un usuario
                              //  $("#formModificarUsuario").validate();

                                function eliminarSubCat(id){
                                    // alert(id);
                                    swal({
                                        title: "Eliminar?",
                                        text: "Sub Categoria!",
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

                                        url:"mantenedoresIngresar.php?mant=10&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaSubCat();
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


 function eventoAlertActualizar(){
    swal("Exito!", "Se ha actualizado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }


 function eventoAlertEliminar(){
    swal("Exito!", "Se ha eliminado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script>
