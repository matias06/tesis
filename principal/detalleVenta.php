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
    require_once '../clases/claseVenta.php';
    $venta = new Venta();
    $num = $venta->consultarUltimaVenta();
    $nnn = $this->convertir_array($num);
?>
        <div class="container-fluid">
          <br>
          <br>
          <div class="">
            <label for="Numero Venta">Numero de Venta: <?php echo $nnn; ?></label>
          </div>
          <div class="col-xs-12 col-md-8 col-md-offset-2">
                      <form id="formularioVenta" name="formularioVenta" method="post">
                        <legend>Agregue Productos de la Venta</legend>

                        <div class="form-group col-xs-12 col-sm-7">
                            <label for="nombre">Ingrese Run de Cliente</label>
                            <input type="text" class="form-control" id="txt_run" name="txt_run" placeholder="Ej. 10199299-4">
                        </div>

                        <div class="form-group col-xs-12 col-sm-7">
                            <button type="submit" class="btn btn-success">Comenzar</button>
                        </div>

                      </form>
            </div>
            <div id="cargarDetalle">

            </div>
        </div>

</body>

<script>
function eliminarCampoBuscar(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
        $("#txt_buscar").val("");


}
           $("#formularioVenta").submit(function(){//captura cuando se envia el formulario
              event.preventDefault();//detiene el envio del formulario
                  $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

                      url:"../mantenedores/ingresoVenta.php", //donde se va a ingresar el mensaje "insertarMensaje.php"
                      data:$("#formularioVenta").serialize(),
                      success:function(respuesta){
                          if(respuesta == 1){
                            alert("venta creada.");
                             window.location = 'detalleVenta.php';
                              // eventoAlertCorrecto();
                             eliminarCamposVenta();
                          }else{
                              alert("Ha ocurrido un error.");
                          }


                      }
                  });
                  return false;
          });


        </script>

</html>
