                    <!-- el sistema realiza backup automaticos por htaccess o por las herramientas del hosting -->

<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
<?php
function validaRut($rut){
    if(strpos($rut,"-")==false){
        $RUT[0] = substr($rut, 0, -1);
        $RUT[1] = substr($rut, -1);
    }else{
        $RUT = explode("-", trim($rut));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut{$i}*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv == trim(strtolower($RUT[1]))){
       return true;
   }else{
       return false;
   }
}

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
                                            <input class="form-control" validaRut($rut)  title="Debe ingresar un rut valido" required id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
                                        </div>
                                        <!--onkeypress="tecladoooooo"  -->
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control"  title="Debe ingresar su nombre" required id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="apellido">Apellido</label>
                                            <input class="form-control"  title="Debe ingresar su apellido" required id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="telefono">Télefono:</label>
                                            <input class="form-control"  title="Debe ingresar su télefono" required id="txt_telefono" name="txt_telefono" placeholder="Télefono Usuario" type="text">
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                  <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                      <div class="form-group">
                                          <label for="telefono">Correo:</label>
                                          <input class="form-control"  title="Debe ingresar su correo" required id="txt_correo" name="txt_correo" placeholder="Correo Usuario" type="email">
                                      </div>
                                  </div>

                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">
                                            <label for="apellido">Contraseña</label>
                                            <input class="form-control"  title="Debe ingresar contraseña" required id="txt_password" name="txt_password" placeholder="Contraseña Usuario" type="password">
                                        </div>

                                    </div>


                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="tipoUsuario">Tipo Usuario</label>
                                                 <select class="form-control" required name="tipousuario" id="tipousuario">
                                                   <option value="" selected disabled>Selecciones tipo:</option>
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
                                                 <select class="form-control" required name="estadousuario" id="estadousuario">
                                                      <option value="" selected disabled>Selecciones estado:</option>
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

//         var name = document.getElementById('txt_rut').value;
//    if(name == null || name.length == 0 || /^\s+$/.test(name)){
//      alert("Debe ingresar un rut.");
//      document.getElementById('txt_rut').focus(); /*vuelve el cursor al campo*/
//      document.getElementById('txt_rut').select();/*hace que pueda escribir sin borrar*/
//      return false;
// }

              function eventoAlertCorrecto(){
              swal("Exito!", "Se ha agregado correctamente!", "success")
              }

                             $("#formularioRegistro").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario

                                if($("#txt_run").val()=="" || $("#txt_nombre").val()=="" || $("#txt_apellido").val()=="" || $("#txt_telefono").val()=="" || $("#txt_correo").val()=="" || $("#txt_password").val()==""){
                                     alert("No puede dejar campos vacios");
                                }else{

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
                                  }
                            });


      function eliminarCamposUsuario(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
           $("#txt_run").val("");
           $("#txt_nombre").val("");
           $("#txt_apellido").val("");
           $("#txt_password").val("");
           $("#txt_telefono").val("");
           $("#txt_correo").val("");

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
