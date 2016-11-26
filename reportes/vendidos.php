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

</body>
</html>
