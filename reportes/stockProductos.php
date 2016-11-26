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
          <div class="col-xs-12 col-md-12">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-condensed tablaGeneral">
                                  <thead class="active danger tablaHead">
                                      <th>Código producto</th>
                                      <th>Descripción</th>
                                      <th>Stock</th>
                                  </thead>



                          </table>
                      </div>
            </div>
</body>
</html>
