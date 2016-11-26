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
                                <h3 class="panel-title">Mantenedor Proveedores</h3>
                        </div>
                            <div class="panel-body">

                               <!-- <form> -->
                        <form action="" id="formularioProveedor" name="formularioProveedor" method="POST">
                            <fieldset>

                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="rut">Rut:</label>
                                            <input class="form-control" onBlur="validarRut(this)" id="txt_rut" name="txt_rut" required placeholder="Rut Proveedor" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="razon_social">Razón social:</label>
                                            <input class="form-control" id="txt_razon_social" name="txt_razon_social" required placeholder="Razón social" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="direccion">Dirección:</label>
                                            <input class="form-control" id="txt_direccion" name="txt_direccion" required placeholder="Dirección" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="telefono">Teléfono:</label>
                                            <input class="form-control" id="txt_telefono" name="txt_telefono" required placeholder="Numero teléfonico" type="">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="txt_correo">Correo electrónico:</label>
                                            <input class="form-control" id="txt_correo" name="txt_correo" required placeholder="Correo electrónico" type="">
                                        </div>
                                    </div>
                                     <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">

                                        <div class="form-group">

                                            <label for="estado">Estado</label>
                                                 <select class="form-control" name="cmb_estado" id="cmb_estado">
                                                    <?php
                                                        require_once '../clases/claseEstado.php';
                                                        $est= new Estado();
                                                        $filasEst= $est->listarEstado();

                                                        foreach($filasEst as $tipo){
                                                            echo '<option value="'.$tipo['id_estado'].'" >'.$tipo['descripcion_estado'].'</option>';
                                                        }

                                                     ?>
                                                </select>

                                        </div>

                                    </div>

                                </div>

                                <div class="container">
                                    <div class="col-md-3">
                                        <input type="submit" id="btn_prov" class="btn btn-success" value="Agregar" name="btn_registrar">
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

            <script>

                        //ingresar y recarga la pagina

                             $("#formularioProveedor").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario

                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                                        url:"mantenedoresIngresar.php?mant=3&prov=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioProveedor").serialize(),
                                        success:function(respuesta){

                                            cargarDivTablaProveedores();
                                                    eliminarCamposProveedores();
                                                    cambiarPagina(1);
                                                    eventoAlertCorrecto();
                                                //alert(respuesta);
                                                //$("#formularioProveedor").html(respuesta);  //muestra el resultado de la consulta si es error o no
                                               //   if(respuesta=="2"){


                                               // }else{
                                               //       $("#error").html(respuesta);
                                               // }

                                        }
                                    });

                            });

 </script>
           <script>

    function eventoAlertCorrecto(){
    swal("Exito!", "Se ha agregado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }
    </script>


    <script>
 function eventoAlertEliminar(){
    swal("Exito!", "Se ha eliminado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
    }

    </script>







                <script type="text/javascript">
                            function eliminarCamposProveedores(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_rut").val("");
                                    $("#txt_razon_social").val("");
                                    $("#txt_direccion").val("");
                                    $("#txt_telefono").val("");
                                    $("#txt_correo").val("");

                            }
                </script>

                 <div id="tablas">
                    <!-- carga la tabla usuario por metodo ajax -->

                </div>
                    <script>
                       function eliminarProveedor(id){
                                    // alert(id);
                                     swal({
                                        title: "Eliminar?",
                                        text: "Proveedor!",
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

                                        url:"mantenedoresIngresar.php?mant=3&prov=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                // alert(respuesta);
                                                cambiarPagina(1);
                                                cargarDivTablaProveedores();
                                                eventoAlertEliminar();
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

            function cargarDivTablaProveedores(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaProveedores.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaProveedores();

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
                        data:"mant=3&prov=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
