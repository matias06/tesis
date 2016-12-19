<div class="col-xs-8 col-sm-6 col-md-4 col-lg-3">

    <div class="caption">
   <!-- Esta funcion carga el modal para modificar datos de la tabla -->
<script>
       function cargarDatosModal(fila){

        $("#txt_num_Modificar").val($("#txt_num"+fila).html());
        $("#txt_catProdModificar").val($("#txt_catProd"+fila).html());

        }
</script>

    <!-- Ventana modal -->
    <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
    <div class="modal fade" id="modificarCatProd">
           <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h3 class="modal-title">Modificar Categoría Producto</h3>
                  </div>
                  <!-- Comienzo formulario -->
                    <div class="modal-body">
                      <form id="formModificarCatProd" name="formModificarCatProd">
                        <fieldset>
                              <div class="row">
                                <input class="form-control hidden"  id="txt_num_Modificar" name="txt_num_Modificar" placeholder="" type="text">
                              <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                  <div class="form-group">
                                      <label for="CatProd">Categoría producto:</label>
                                      <input class="form-control" required id="txt_catProdModificar" name="txt_catProdModificar" placeholder="" type="text">
                                  </div>
                              </div>
                          </div>
                                      <div class="container">
                                              <div class="col-md-3">
                                                  <input type="submit" id="modificar" class="btn btn-success" value="Agregar" name="btn_registrar" >
                                              </div>
                                      </div>
                              <!-- <br> -->
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
    $("#formModificarCatProd").submit(function(){//captura cuando se envia el formulario
    event.preventDefault();//detiene el envio del formulario
        //alert("hola");
            $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                url:"mantenedoresIngresar.php?mant=9&func=2",  // donde se va a ingresar "mantenedoresIngresar.php"
                data:$("#formModificarCatProd").serialize(),
                success:function(respuesta){
                  //alert(respuesta);
                  //$("#formModificarSubCat").html(respuesta);
              //alert("hola");
              //alert(id);
                    //alert(respuesta);
                    cambiarPagina(1);
                    cargarDivTablaCatProducto();
                  }
            });
                return false;
    });



// dejar inactivo a un usuario
      //  $("#formModificarUsuario").validate();

        function eliminarCatProducto(id){
            //alert(id);
             swal({
                title: "¿Eliminar Categoría de trabajo?",
                text: "",
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

                url:"mantenedoresIngresar.php?mant=9&func=3", // donde se va a ingresar "mantenedoresIngresar.php"
                data:"id="+id,
                success:function(respuesta){
                  if(respuesta==1){
                        // alert(respuesta);
                        cambiarPagina(1);
                        cargarDivTablaCatProducto();
                        swal("CATEGORÍA PRODUCTO ELIMINADA", "", "success");
                }else{
                  swal("No se puede eliminar categoría producto, favor verifique si tiene datos asociadas a la cuenta.", "", "error");
                }
          }
      });
                    } else {
                        swal("Cancelado", "", "error");
                    }
                });
        }

        /*Aquí se le da la propiedad al boton modificar para que cierre el modal*/
        $('#modificar').click(function(){
            $('.modal-backdrop').hide()
        });


    function eventoAlertActualizar(){
    swal("Exito!", "Se ha actualizado correctamente!", "success")
    // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script>
