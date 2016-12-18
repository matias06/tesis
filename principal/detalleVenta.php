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
    <?php cargarMenu(); ?>
  </header>
<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
    // require_once '../clases/claseVenta.php';
    // $venta = new Venta();
    // $num = $venta->consultarUltimaVenta();
    // $nnn = $this->convertir_array($num);
?>
        <div class="container-fluid">
          <br>
          <br>

          <!-- <div class="col-xs-12 col-md-8 col-md-offset-2">
                      <form id="formularioVenta" name="formularioVenta" method="post">
                        <legend>Agregue Productos de la Venta</legend>

                        <div class="form-group col-xs-12 col-sm-7">
                            <label for="nombre">Ingrese Codigo del Producto</label>
                            <input type="text" class="form-control" id="txt_id" name="txt_id" placeholder="Código del Producto">
                        </div>

                        <div class="form-group col-xs-12 col-sm-7">
                            <button type="submit" class="btn btn-success">Comenzar</button>
                        </div>

                      </form>
            </div> -->
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

            <div id="cargarDetalle">

            </div>
        </div>

</body>

<script>
// function eliminarCampoBuscar(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
//         $("#txt_buscar").val("");
//  }
//            $("#formularioVenta").submit(function(){//captura cuando se envia el formulario
//               event.preventDefault();//detiene el envio del formulario
//                   $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
//                      url:"../mantenedores/ingresoVenta.php", //donde se va a ingresar el mensaje "insertarMensaje.php"
//                       data:$("#formularioVenta").serialize(),
//                       success:function(respuesta){
//                           if(respuesta == 1){
//                             alert("venta creada.");
//                              window.location = 'detalleVenta.php';
//                               // eventoAlertCorrecto();
//                              eliminarCamposVenta();
//                           }else{
//                               alert("Ha ocurrido un error.");
//                           }
//                       }
//                   });
//                   return false;  });


        </script>
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
