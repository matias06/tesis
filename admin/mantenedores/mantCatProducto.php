<!-- Parametros buscar y mostrar -->
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
                        <h3 class="panel-title">Mantenedor Categoría Producto</h3>
                </div>
                    <div class="panel-body">

            <!-- <form> -->
  <form action="" id="formularioCatProducto" name="formularioCatProducto" method="POST">
      <fieldset>
            <div class="row">
            <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                <div class="form-group">
                    <label for="CatProd">Categoría producto:</label>
                    <input class="form-control" title="" required id="txt_catProd" name="txt_catProd" placeholder="Categoría trabajo" type="text">
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

                             $("#formularioCatProducto").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario



                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                        //$("#formularioCatProducto").html(respuesta);
                                        url:"mantenedoresIngresar.php?mant=9&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioCatProducto").serialize(),
                                        success:function(respuesta){

                                                if(respuesta == 1){
                                                cambiarPagina(1);
                                                cargarDivTablaCatProducto();
                                                eliminarCamposCatProducto();
                                                eventoAlertCorrecto();
                                            }else{
                                                alert("Ha ocurrido un error.");
                                            }

                                        }
                                    });
                                    return false;
                            });



                                //$("#formularioRegistro").validate();


                            function eliminarCamposCatProducto(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_num").val("");
                                    $("#txt_catProd").val("");

                            }

            function cargarDivTablaCatProducto(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaCatProducto.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaCatProducto();



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
                        data:"mant=9&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>
