<div class="container">
   <div class="col-xs-4 col-xs-offset-4">
                  <div class="input-group">
                    <span class="input-group-addon "></span>
                    <input placeholder="Buscar" onKeyUp="listarTabla()" id="txt_buscar" type="text" class="form-control">
                  </div>
                </div>

                <div class="col-xs-4">

                    <label class="control-label col-xs-3" for="cmb_cantidadRegistros">Mostrar</label>
                    <div class="col-xs-6">
                        <select onChange="listarTabla()" name="cmb_cantidadRegistros" class="form-control" id="cmb_cantidadRegistros">
                          <option value="3">3</option>
                          <option value="5">5</option>
                          <option value="10">10</option>
                          <option value="20">20</option>
                        </select>
                    </div>
                </div>
</div>
<br>
<div class="container-fluid">

            <div class="col-md-10-centered">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title">Mantenedor Productos</h3>
                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioProducto" name="formularioProducto" enctype="multipart/form-data" method="POST">
                            <fieldset>

                                <div class="row">
                                   <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="id">Código:</label>
                                            <input class="form-control" id="txt_id_producto" name="txt_id_producto" placeholder="Código de producto" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción:</label>
                                            <input class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Descripción de productos" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-2 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="valor">Valor:</label>
                                            <input class="form-control" id="txt_valor" name="txt_valor" placeholder="Valor del producto" type="text">
                                        </div>
                                    </div>
                                   <!--  imagen cambiar el txt_imagen -->
                                    <div style="animation-delay: 0.2s;" class="col-md-2 animated-panel zoomIn">
                                        <div class="form-group">

                                          <label for="imagen">Subir Imagen</label>
                                          <input type="file" id="txt_imagen" name="txt_imagen">

                                        </div>

                                    </div>

                                </div>


                                <div class="row">
                                   <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="cmb_proveedores">Proveedores</label>
                                                 <select class="form-control" name="cmb_proveedores" id="cmb_proveedores">
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

                                            <label for="tipoUsuario">Estado producto</label>
                                                 <select class="form-control" name="cmb_estado_producto" id="cmb_estado_producto">
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

                                   <div style="animation-delay: 0.5s;" class="col-md-2 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="tipoUsuario">Categoria producto</label>
                                                 <select class="form-control" name="cmb_categoria_producto" id="cmb_categoria_producto">
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

                                </div>
                                            <div class="container">
                                                <div class="col-md-3">
                                            <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar" >

                                                </div>
                                            </div>
                                 <div class="row">
                                  <br>
                                    <div id="contenedorMantenedor"></div><!-- DIV DONDE SE CARGA LA TABLA-->
                                </div>
                            </fieldset>
                        </form>
                        </div>
                </div>
                <!-- tabla -->

            </div>
           </div> <!-- container -->
               <div id="tablas">
                    <!-- carga la tabla producto por metodo ajax -->
                </div>
           <script>
                //INSERTA TODO EL FORMULARIO Y LA IMAGEN
                             $("#formularioProducto").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario
                                var formData = new FormData(document.getElementById("formularioProducto"));
                                //alert("llega");

                                     var formData = new FormData(document.getElementById("formularioProducto"));
                         //alert("llega");
                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                        url:"mantenedoresIngresar.php?mant=2&prod=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:formData,
                                        type:'POST',
                                        cache:false,
                                        contentType:false,
                                        processData:false,
                                        success:function(respuesta){
                                                 //alert(respuesta);
                                                //$("#formularioProducto").html(respuesta);
                                                 cambiarPagina(1);
                                                cargarDivTablaProducto();
                                                eliminarCamposProducto();
                                                eventoAlertCorrecto();
                                        }
                                    });

                            });



              function eventoAlertCorrecto(){
              swal("Exito!", "Se ha agregado correctamente!", "success")
               // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
              }

             function eventoAlertEliminar(){
                swal("Exito!", "Se ha eliminado correctamente!", "success")
                 // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
                }


                            function eliminarCamposProducto(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_id_producto").val("");
                                    $("#txt_descripcion").val("");
                                    $("#txt_valor").val("");
                                    $("#txt_imagen").val("");
                                    $("#txt_proveedor").val("");

                            }
                            </script>

                            <script>

                            function cargarDivTablaProducto(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaProductos.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }

                           cargarDivTablaProducto();


                              function eliminarProductos(idProd){
                                    // alert(id);
                                    swal({
                                        title: "Eliminar?",
                                        text: "Producto!",
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

                                                    url:"mantenedoresIngresar.php?mant=2&prod=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                                   data:"idProd="+idProd,
                                                    success:function(respuesta){
                                                            // alert(respuesta);
                                                             cargarDivTablaProducto();
                                                             cambiarPagina(1);
                                                    }
                                                });
                                                swal("Modificado!", "", "success");
                                            } else {
                                                swal("Cancelado", "", "error");
                                            }
                                        });



                                }
                            </script>

             <script>
                var pagina;
                //INICIO SCRIPT PARA CARGAR TABLA Y PAGINADA
                  function cambiarPagina(arg_pagina){
                       pagina= arg_pagina;
                       listarTabla();
                  }

                  function listarTabla(){

                      var busqueda= $("#txt_buscar").val();
                      if(busqueda==null){
                          busqueda="_";
                      }

                      $.ajax({
                        url:"mantenedoresIngresar.php",
                        data:"mant=2&prod=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
