<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Proveedores</title>
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
$.ajax({
    url:'../mantenedorTablasAjax/cargarTablaMensajes.php',
    success:function(resultado){
    $("#cargarMensajes").html(resultado);

      }
});
</script>


</body>
</html>