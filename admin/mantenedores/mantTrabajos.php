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
                                <h3 class="panel-title">Mantenedor Trabajos</h3>
                        </div>
                            <div class="panel-body">
                                
                               <!-- <form> -->
                        <form action="" id="formularioTrabajo" name="formularioTrabajo" method="POST">
                            <fieldset>
                            
                                <div class="row">
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="nombreTrabajo">Trabajo:</label>
                                            <input class="form-control" id="txt_nombreTrabajo" name="txt_nombreTrabajo" placeholder="Nombre Trabajo" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="descripcionTrabajo">Detalle:</label>
                                            <input class="form-control" id="txt_descripcionTrabajo" name="txt_descripcionTrabajo" placeholder="Descripción del Trabajo" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">
                                            <label for="costo">Valor:</label>
                                            <input class="form-control" id="txt_costo" name="txt_costo" placeholder="$$$$$" type="text">
                                        </div>
                                    </div>
                                    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
                                        <div class="form-group">

                                            <label for="servicio">Servicio: </label>
                                                 <select class="form-control" name="servicio" id="servicio">
                                                    <?php 
                                                        require_once '../clases/claseServicio.php';
                                                        $serv= new Servicio();
                                                        $filasServicio= $serv->listarServicio();

                                                        foreach($filasServicio as $servicio){
                                                            echo '<option value="'.$servicio['id_servicio'].'" >'.$servicio['descripcion_servicio'].'</option>';
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
                <div id="contenedorMantenedor"></div><!-- DIV DONDE SE CARGA LA TABLA-->
              </div>
                            </fieldset>
                        </form>
                     
                        
                            
                            </div>
                           </div>
                        </div>

                      
                        </div>

 <script>

                             $("#formularioTrabajo").submit(function(){//captura cuando se envia el formulario
                                event.preventDefault();//detiene el envio del formulario


                                    $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=8&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
                                        data:$("#formularioTrabajo").serialize(),
                                        success:function(respuesta){
                                                if(respuesta == 1){
                                                cambiarPagina(1);
                                                cargarDivTablaTrabajo();
                                                eliminarCamposTrabajo();
                                                eventoAlertCorrecto();
                                            }else{
                                                alert("Ha ocurrido un error.");
                                            }
                                                
                                        }
                                    });
                                    return false;
                            });


                    
                                //$("#formularioRegistro").validate();


                        </script>
                                <!-- ********alertas********  -->
                        


   
                    <script type="text/javascript"> 
                            function eliminarCamposTrabajo(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                                    $("#txt_nombreTrabajo").val("");
                                    $("#txt_descripcionTrabajo").val("");
                                    $("#txt_costo").val("");
                                    $("#servicio").val("");
                                    
                            }
                            </script>

                 <div id="tablas">
                    <!-- carga la tabla usuario por metodo ajax -->
                    
                </div>
                            

                            <script>

            function cargarDivTablaTrabajo(){
                                $.ajax({url: '../mantenedorTablasAjax/cargarTablaTrabajos.php',
                                        success:function(data){
                                          $("#tablas").html(data);
                                        }
                                });
                            }



                           cargarDivTablaTrabajo();

                            </script>
                           <script>
                    
    function eventoAlertCorrecto(){
    swal("Exito!", "Se ha agregado correctamente!", "success")
     // swal("Se ha agregado correctamente!", "You clicked the button!", "success")
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
                        data:"mant=8&func=4&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                        success:function(respuesta){
                              $("#contenedorMantenedor").html(respuesta);
                        }
                      });

                  }
                  cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                </script>