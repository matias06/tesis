<?php
	include '../comun/comun.php';
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Pagina principal</title>
	<?php 	cargarHeader(); ?>

</head>
<body>
    
	<header>
		<?php cargarMenu(); ?>
	</header>		

<div id="contenedorimagenc">
		<img src="../imagenes/2.png" alt="" class="img-responsive center-block" />
		<!-- <img src="../imagenes/logo.png" alt=""> -->
	
	</div>

</body>

</html>