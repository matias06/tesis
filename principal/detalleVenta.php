<?php
  include '../comun/comun.php';
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
   <title>Detalle de la Venta</title>
  <?php   cargarHeader(); ?>
</head>
<body>
  <header>
    <?php cargarMenuSD(); ?>
  </header>
<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();

?>
        <div class="container-fluid">
          <br>
          <br>

            <div class="col-xs-4 col-xs-offset-">
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
         <section class="sobre_nosotros">

         <div class="container">
         <br>
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <h2 class="text-center titleh2">
                     Lista de Productos
                   </h2>
             </div>

         </div>
         </section>
         <br>
         <br>

        <div class="container">
           <div class="row">
               <div id="contenedorProductos" class="tablaGeneral"></div><!-- DIV DONDE SE CARGA LA TABLA-->

                </div>
           </div>
        </div>

            <div id="cargarDetalle"> <!-- DIV DONDE SE CARGAN LOS PRODUCTOS DEL DETALLE -->

            </div>
        </div>

</body>


<script>
            cambiarPagina(1);

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
                  url:"../mantenedores/listarProductos.php",
                  data:"buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                  success:function(respuesta){
                        $("#contenedorProductos").html(respuesta);
                  }
                });

            }
            cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
          </script>

</html>
