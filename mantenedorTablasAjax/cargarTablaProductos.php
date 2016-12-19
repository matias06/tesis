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

                                $("#txt_id_producto_modificar").val($("#txt_id_producto"+fila).html());

                                $("#txt_descripcion_modificar").val($("#txt_descripcion"+fila).html());
                                $("#txt_valor_modificar").val($("#txt_valor"+fila).html());
                                $("#txt_imagen_modificar").val($("#txt_imagen"+fila).html());

                                 $("#cmb_id_proveedor_producto_modificar").val($("#txt_proveedor"+fila).html());
                                 $("#cmb_proveedores_modificar").val($("#txt_proveedor"+fila).html());

                                $("#cmb_id_estado_producto").val($("#cmb_id_estado_producto"+fila).html());
                                $("#cmb_estado_producto_modificar").val($("#cmb_id_estado_producto"+fila).html());

                                $("#cmb_id_categoria_producto").val($("#cmb_id_categoria_producto"+fila).html());
                                $("#cmb_categoria_producto_modificar").val($("#cmb_id_categoria_producto"+fila).html());

                                $("#cmb_id_subcategoria_producto").val($("#cmb_id_subcategoria_producto"+fila).html());
                                $("#cmb_subcategoria_producto_modificar").val($("#cmb_id_subcategoria_producto"+fila).html());

                                }
                        </script>

                            <!-- Ventana modal -->
                            <!-- <a href="#modificar" data-toggle="modal"  class="btn btn-primary btn-xs" >Modificar usuario</a> -->
                            <div class="modal fade" id="modificar">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Modificar Producto</h3>
                                          </div>
                                          <!-- Comienzo formulario -->
                 <div class="container">
                    <form action="" id="formProductoModificar" name="formProductoModificar">
                            <fieldset>
                                <!--campos ocultos para guardar -->
                                 <input type="hidden" id="txt_id_producto_modificar" name="txt_id_producto_modificar" >
                                <input type="hidden" id="cmb_id_proveedor_producto_modificar" name="cmb_id_proveedor_producto_modificar" >
                                <input type="hidden" id="cmb_id_estado_producto" name="txt_id_estado_producto_modificar" >
                                <input type="hidden" id="cmb_id_categoria_producto" name="txt_id_categoria_producto_modificar" >
                                <input type="hidden" id="cmb_id_subcategoria_producto" name="txt_id_subcategoria_producto_modificar" >


                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción:</label>
                                            <input class="form-control" id="txt_descripcion_modificar" name="txt_descripcion_modificar" placeholder="Descripción de productos" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="valor">Valor:</label>
                                            <input class="form-control" id="txt_valor_modificar" name="txt_valor_modificar" placeholder="Valor del producto" type="text">
                                        </div>
                                    </div>
                                </div>
                                   <!--  imagen cambiar el txt_imagen -->
                                 <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="imagen">Imagen</label>
                                            <input class="form-control" id="txt_imagen_modificar" name="txt_imagen_modificar" placeholder="" type="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                     <div class="form-group">
                                         <label for="cmb_proveedores">Proveedores</label>
                                              <select class="form-control" name="cmb_proveedores_modificar" id="cmb_proveedores_modificar">
                                                 <?php
                                                     require_once '../clases/claseProveedor.php';
                                                     $prov= new Proveedor();
                                                     $filasProv= $prov->listarProveedor();
                                                     foreach($filasProv as $tipo){
                                                         echo '<option value="'.$tipo['rut'].'" >'.$tipo['razon_social'].'</option>';
                                                     }
                                                  ?>
                                       </select>
                                     </div>
                                 </div>


                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="estadoProducto">Estado producto</label>
                                                 <select class="form-control" name="cmb_estado_producto_modificar" id="cmb_estado_producto_modificar">
                                                    <?php
                                                        require_once '../clases/claseEstadoProducto.php';
                                                        $prod= new EstadoProducto();
                                                        $filasProduc= $prod->listarEstadoProducto();

                                                        foreach($filasProduc as $tipo){
                                                            echo '<option value="'.$tipo['id_estado_producto'].'" >'.$tipo['descripcion_estado_producto'].'</option>';
                                                        }
                                                     ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="tipoUsuario">Categoria producto</label>
                                                 <select class="form-control" name="cmb_categoria_producto_modificar" id="cmb_categoria_producto_modificar">
                                                    <?php
                                                        require_once '../clases/claseCategoriaProducto.php';
                                                        $cat= new CategoriaProducto();
                                                        $filasCat= $cat->listarCategoriaProducto();

                                                        foreach($filasCat as $tipo){
                                                            echo '<option value="'.$tipo['id_categoria_producto'].'" >'.$tipo['descripcion_categoria_producto'].'</option>';
                                                        }
                                                     ?>
                                                </select>
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                         <div class="form-group">
                                             <label for="sub">Sub Categoria</label>
                                                  <select class="form-control" name="cmb_Subcategoria_producto_modificar" id="cmb_Subcategoria_producto_modificar">
                                                     <?php
                                                          require_once '../clases/claseSubCatProducto.php';
                                                          $Subcat= new SubCatProducto();
                                                          $filasSubCat= $Subcat->listarSubCategoria();

                                                          foreach($filasSubCat as $tipo){
                                                          echo '<option value="'.$tipo['id_subcategoria_producto'].'" >'.$tipo['descripcion_subcategoria_producto'].'</option>';
                                                         }
                                                      ?>
                                                 </select>
                                         </div>
                                     </div>
                                </div>
                                         <div class="container">
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success" id="modificar" data-toggle="modal" data-target="#modificar">Modificar</button>

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

                                <!-- Termino ventana modal -->
                                </div>
                                </table>


                            </div>  <!-- table -->
<div class="hola">

</div>
                            <script>

                $("#formProductoModificar").submit(function(){//ENVIA FORMULARIO DE MODIFICACION DE REGISTRO
                    event.preventDefault();
                    alert("enviado");

                    $.ajax({
                        url:"mantenedoresIngresar.php?mant=2&prod=2",
                        data: $("#formProductoModificar").serialize(),

                        success:function(resultado){
                          //$("#hola").html(resultado);
                          alert(resultado);
                             //alert("MODIFICADO CORRECTAMENTE");
                              cambiarPagina(1);
                              cargarDivTablaProducto();
                              //eventoAlertActualizar();
                              //cambiarPagina(1);



                        }
                    });
            });



                                // $("#formProductoModificar").validate();




                        </script>

            <script>
 function eventoAlertActualizar(){
    swal("Exito!", "Se ha actualizado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    $('#modificar').click(function(){
        $('.modal-backdrop').fadeOut('fast');
    });
    }



    </script>
