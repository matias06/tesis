<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Reportes stock</title>
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
?>
<br>

<div class="content-central col-md-8">


<div class="container">
  <br>
  <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="230" height="60"></a>
  </div>

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

<br>
<section class="sobre_nosotros">

<div class="container">
<br>
    <div class="col-xs-10 col-sm-12 col-md-10">
        <h2 class="text-center titleh2">
          Stock productos
          </h2>
    </div>

</div>
</section>
<br>
<br>

            <div class="container">
                  <div class="row  col-sm-12 col-md-10">
                    <div id="contenedorCliente" class="tablaGeneral"></div><!-- DIV DONDE SE CARGA LA TABLA-->
                    <div class="col-md-3">
                <input type="button" class="btn btn-success" onclick=" location.href='../reportes/stockpdf.php' " value="Generar reporte" name="boton" />
                    </div>
                  </div>
          </div>

        </div>
          </body>
          </html>

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
                            url:"../mantenedores/mantenedoresIngresar.php",
                            data:"mant=2&prod=5&buscar="+busqueda+"&pag="+pagina+"&cantidadReg="+$("#cmb_cantidadRegistros").val(),
                            success:function(respuesta){
                                  $("#contenedorCliente").html(respuesta);
                            }
                          });

                      }
                      cambiarPagina(1); //FIN SCRIPT PARA CARGAR TABLA Y PAGINADA
                    </script>
