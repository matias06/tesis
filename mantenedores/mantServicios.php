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
                                <h3 class="panel-title">Mantenedor Servicios</h3>
                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioServicio" name="formularioServicio" method="POST">
                            <fieldset>

                                <div class="row">

                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombreServicio">Nombre Servicio:</label>
                                            <input class="form-control" title="Debe ingresar nombre" required id="txt_descripcionServicio" name="txt_descripcionServicio" placeholder="Nombre Servicio" type="text">
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
                                <div id="contenedorMantenedor"></div><!-- DIV DONDE SE CARGA LA TABLA-->
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

                    // INSERT DE SERVICIO
                             $("#formularioServicio").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario

                                if($("#txt_descripcionServicio").val()==""){
                                     alert("No puede dejar campos vacios");
                                }else{

                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=7&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioServicio").serialize(),
                                        success:function(respuesta){
                                                //alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaServicio();
                                                eliminarCamposServicio();
                                                eventoAlertCorrecto();
                                        }
                                    });
                                    return false;
                                  }
                            });



                                //$("#formularioRegistro").validate();


                            function eliminarCamposServicio(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_descripcionServicio").val("");


                            }



            function cargarDivTablaServicio(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaServicio.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaServicio();


    function eventoAlertCorrecto(){
    swal("Exito!", "Se ha agregado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }


                 // PAGINADOR
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
                        data:"mant=7&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
