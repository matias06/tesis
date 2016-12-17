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
                                  <h3 class="panel-title">Mantenedor Región</h3>
                          </div>
                            <div class="panel-body">
                               <!-- <form> -->
                        <form action="" id="formularioRegion" name="formularioRegion" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombreRegion">Nombre región:</label>
                                            <input class="form-control" title="Debe ingresar nombre" required id="txt_region" name="txt_region" placeholder="Nombre región" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="col-md-3">
                                            <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">
                                        </div>
                                </div>
                                <br>
                                <div class="row">
                                      <div id="contenedorMantenedor"></div><!-- DIV DONDE SE CARGA LA TABLA-->
                                </div>

                            </fieldset>
                        </form>

                            </div>
                           </div>
                        </div>


                        </div>

 <script>

    function eventoAlertCorrecto(){
    swal("Exito!", "Se ha agregado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }
    </script>
                             <script>

                             $("#formularioRegion").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario
                                if($("#txt_region").val()==""){
                                     alert("No puede dejar campos vacios");
                                }else{
                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=5&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioRegion").serialize(),
                                        success:function(respuesta){
                                                //alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaRegion();
                                                eliminarCamposRegion();
                                                eventoAlertCorrecto();
                                        }
                                    });
                                    return false;
                                  }
                            });



                                //$("#formularioRegistro").validate();


                        </script>
                                <!-- ********alertas********  -->




                    <script type="text/javascript">
                            function eliminarCamposRegion(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_region").val("");


                            }
                            </script>

                 <div id="tablas">
                    <!-- carga la tabla usuario por metodo ajax -->

                </div>


                            <script>

            function cargarDivTablaRegion(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaRegion.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaRegion();

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
                        data:"mant=5&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
