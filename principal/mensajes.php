<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Mensajes</title>
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
          <div class="col-xs-12 col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-condensed tablaGeneral">
                                  <thead class="active danger tablaHead">
                                      <th>Número</th>
                                      <th>Fecha del Mensaje</th>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Correo Remitente</th>
                                      <th>Mensaje</th>
                                      <th>Responder</th>
                                      <th>Eliminar</th>
                                  </thead>
                                  <tbody id="cargarMensajes">

                                  </tbody>


                          </table>
                      </div>
            </div>
        </div>
<script type="text/javascript">

function cargarDivTablaMensajes(){
                    $.ajax({url:'../mantenedorTablasAjax/cargarTablaMensajes.php',
                    success:function(resultado){
                    $("#cargarMensajes").html(resultado);
                            }
                    });
                }
                cargarDivTablaMensajes();
</script>
<script>
function eliminarMensaje(id){
    // alert(id);
    swal({
        title: "¿Eliminar Mensaje?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar!",
        closeOnConfirm: false,
        closeOnCancel: false },
        function(isConfirm){
            if (isConfirm) {

     $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

        url:"elimMensaje.php", // donde se va a ingresar "mantenedoresIngresar.php"
        data:"id="+id,
        success:function(respuesta){
          if(respuesta == 1){
                 //alert(respuesta);
                 cargarDivTablaMensajes();
                  swal("Eliminado", "", "success");
                }else {
                  alert("No se pudo eliminar");
                }
              }});

           } else {
               swal("Cancelado", "", "error");
           }
                // eventoAlertEliminar();

   }

        );
    }
</script>


</body>
</html>
