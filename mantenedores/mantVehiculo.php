<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
<div class="container">
   <div class="col-xs-12 col-md-4 col-md-offset-4">
                  <div class="input-group">
                    <span class="input-group-addon "></span>
                    <input placeholder="Buscar" onKeyUp="listarTabla()" id="txt_buscar" type="text" class="form-control">
                  </div>
                </div>

                <div class="col-xs-12 col-md-4">

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
                                <h3 class="panel-title">Mantenedor Vehiculo</h3>

                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioVehiculo" name="formularioVehiculo" method="POST">
                            <fieldset>
                              <div class="row">
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="patente">Patente:</label>
                                          <input class="form-control"  onBlur="validarRun(this) " title="Debe ingresar número patente" required id="txt_patente" name="txt_patente" placeholder="Número patente" type="text">
                                      </div>
                                </div>
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="nombre">Marca</label>
                                          <input class="form-control" title="Debe ingresar su marca" required id="txt_marca" name="txt_marca" placeholder="Ingresa marca" type="text">
                                      </div>
                                  </div>
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="apellido">Modelo</label>
                                          <input class="form-control" title="Debe ingresar su modelo" required id="txt_modelo" name="txt_modelo" placeholder="Ingresar modelo" type="text">
                                      </div>
                                  </div>

                                  <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="tipoUsuario">Run Usuario</label>
                                               <select class="form-control" name="cmb_usuario" id="cmb_usuario">
                                                  <?php
                                                      require_once '../clases/usuario.php';
                                                      $User= new Usuario();
                                                      $filasUser= $User->listarRunUsuario();

                                                      foreach($filasUser as $tipo){
                                                          echo '<option value="'.$tipo['run'].'" >'.$tipo['nombre'].'</option>';
                                                      }
                                                   ?>
                                              </select>
                                      </div>
                                  </div>



                              </div>
                                 <div class="container">
                                      <div class="col-md-3">
                                          <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar">

                                      </div>
                                  </div>
                                  <!--BOTON QUE ABRE MODAL DE CREAR NUEVO -->
                              <div class="row">
                              <br>
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

              function eventoAlertCorrecto(){
              swal("Exito!", "Se ha agregado correctamente!", "success")
              }


                             $("#formularioVehiculo").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=12&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioVehiculo").serialize(),
                                        success:function(respuesta){
                                             //alert("Usuario Agregado correctamente");

                                              alert(respuesta);
                                                //$("#formularioProveedor").html(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaVehiculo();
                                                eliminarCamposVehiculo();
                                                eventoAlertCorrecto();

                                        }
                                    });
                                    return false;
                            });


      function eliminarCamposVehiculo(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
           $("#txt_patente").val("");
           $("#txt_marca").val("");
           $("#txt_modelo").val("");
           $("#cmb_usuario").val("");

                            }
                            </script>




                            <script>

            function cargarDivTablaVehiculo(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaVehiculo.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }

                           cargarDivTablaVehiculo();


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
                        data:"mant=12&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
