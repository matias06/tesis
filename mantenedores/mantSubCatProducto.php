<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
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
                                <h3 class="panel-title">Sub Categorias</h3>
                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioSubCat" name="formularioSubCat" method="POST">
                          <!-- <input type="hidden" id="txt_id_SubProducto" name="txt_id_SubProducto"> -->
                          <!-- <input type="hidden" id="txt_id_CatProducto" name="txt_id_CatProducto" > -->
                            <fieldset>

                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="descripcionCat">Sub categoría:</label>
                                            <input class="form-control" id="txt_subCat" name="txt_subCat" required placeholder="Descripcion Sub categoría" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">

                                            <label for="region">Categoría</label>
                                                 <select class="form-control" required name="cmb_SubCat" id="cmb_SubCat">
                                                   <option value="" selected disabled>Seleccione Sub Categoría:</option>

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
                                        <div class="col-md-3">
                                            <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar" >

                                        </div>
                                </div>
                                <br>

                              <div class="row">
                                <div id="contenedorMantenedorSubCat"></div><!-- DIV DONDE SE CARGA LA TABLA-->
                              </div>
                            </fieldset>
                        </form>



                            </div>
                           </div>
                        </div>
                        </div>

                         <div id="tablas">
                    <!-- carga la tabla usuario por metodo ajax -->
                        </div>



                          <script>

                             $("#formularioSubCat").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario

                                if($("#txt_subCat").val()==""){
                                     alert("No puede dejar campos vacios");
                                }else{

                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=10&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioSubCat").serialize(),
                                        success:function(respuesta){
                                        //alert("hola");
                                                if(respuesta == 1){
                                                  alert(respuesta);
                                                alert("hola");
                                                cambiarPagina(1);
                                                cargarDivTablaSubCat();
                                                eliminarCamposSubCat();
                                                eventoAlertCorrecto();
                                            }else{
                                                alert("Ha ocurrido un error.");
                                            }

                                        }
                                    });
                                    return false;
                                  }
                            });



                                //$("#formularioRegistro").validate();


                            function eliminarCamposSubCat(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_subCat").val("");

                            }

            function cargarDivTablaSubCat(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaSubCat.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaSubCat();



    function eventoAlertCorrecto(){
    swal("Exito!", "Se ha agregado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

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
                        data:"mant=10&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedorSubCat").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
