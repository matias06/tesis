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
                                <h3 class="panel-title">Mantenedor Usuarios</h3>

                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioRegistro" name="formularioRegistro" method="POST">
                            <fieldset>

                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="run">Run:</label>
                                            <input class="form-control" onBlur="validarRun(this)" title="Debe ingresar un rut valido" required id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control" title="Debe ingresar su nombre" required id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="apellido">Apellido</label>
                                            <input class="form-control" title="Debe ingresar su apellido" required id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
                                        </div>
                                    </div>


                                </div>


                                <div class="row">

                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">
                                            <label for="apellido">Contraseña</label>
                                            <input class="form-control" title="Debe ingresar contraseña" required id="txt_password" name="txt_password" placeholder="Contraseña Usuario" type="password">
                                        </div>

                                    </div>


                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="tipoUsuario">Tipo Usuario</label>
                                                 <select class="form-control" name="tipousuario" id="tipousuario">
                                                    <?php
                                                        require_once '../clases/claseTipoUsuario.php';
                                                        $TipoU= new TipoUsuario();
                                                        $filasTipoU= $TipoU->listarTipoUsuario();

                                                        foreach($filasTipoU as $tipo){
                                                            echo '<option value="'.$tipo['id_tipo_usuario'].'" >'.$tipo['descripcion_tipo_usuario'].'</option>';
                                                        }

                                                     ?>
                                                </select>

                                        </div>

                                    </div>

                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="estado">Estado usuario</label>
                                                 <select class="form-control" name="estadousuario" id="">
                                                    <?php
                                                        require_once '../clases/claseEstadoUsuario.php';
                                                        $estadoUsuario= new EstadoUsuario();
                                                        $filasEstado= $estadoUsuario->listarEstadoUsuario();

                                                        foreach($filasEstado as $tipoEst){
                                                            echo '<option value="'.$tipoEst['id_estado_usuario'].'" >'.$tipoEst['descripcion_estado_usuario'].'</option>';
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


                             $("#formularioRegistro").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=1&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioRegistro").serialize(),
                                        success:function(respuesta){
                                             //alert("Usuario Agregado correctamente");

                                                //alert(respuesta);
                                                //$("#formularioProveedor").html(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaUsuario();
                                                eliminarCamposUsuario();
                                                eventoAlertCorrecto();

                                        }
                                    });
                                    return false;
                            });


      function eliminarCamposUsuario(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
           $("#txt_run").val("");
           $("#txt_nombre").val("");
           $("#txt_apellido").val("");
           $("#txt_password").val("");

                            }
                            </script>




                            <script>

            function cargarDivTablaUsuario(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaUsuario.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }

                           cargarDivTablaUsuario();


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
                        data:"mant=1&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
