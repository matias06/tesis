<div class="container-fluid">
          
            <div class="col-md-10-centered">                      

                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title">Mantenedor Categoría de trabajos</h3>
                        </div>
                            <div class="panel-body">
                                
                               <!-- <form> -->
                    <form action="" id="formularioCatTrabajo" name="formularioCatTrabajo" method="POST">
                            <fieldset>

                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="run">Descripción categoría trabajo:</label>
                                            <input class="form-control" id="txt_descripcion_categoria" name="txt_descripcion_categoria" placeholder="Nueva categoria" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="col-md-3">
                                            <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar" >

                                        </div>
                                </div>

                            </fieldset>

                        </form>
                        </div>
                </div>
                <!-- tabla -->
              

           </div> <!-- container -->


            <script>

                             $("#formularioCatTrabajo").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=4&catTrab=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioCatTrabajo").serialize(),
                                        success:function(respuesta){
                                                //alert(respuesta);
                                                
                                                cargarDivTablaCatTrabAjo();
                                                eliminarCamposCatTrabajo();
                                        }
                                    });
                                    return false;
                            });


                    
                                //$("#formularioRegistro").validate();


                        </script>

                         <div id="tablas">
                    <!-- carga la tabla usuario por metodo ajax -->
                    
                </div>

                         <script>

            function cargarDivTablaCatTrabAjo(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaCatTrabajo.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaCatTrabAjo();

                            </script>

                               <script type="text/javascript"> 
                            function eliminarCamposCatTrabajo(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_descripcion_categoria").val("");
                                   
                                
                            }

                           
                            </script>


                           