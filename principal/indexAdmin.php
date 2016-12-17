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
	<div class="container">
		<div class="row">
			<h4 class="lead">Bienvenido Sr(a) <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?></h4>
		</div>

<div  class="row" id="contenedorimagenc">
		<img src="../imagenes/2.png" alt="" class="img-responsive center-block" />
		<!-- <img src="../imagenes/logo.png" alt=""> -->

	</div>
	</div>


</body>

</html>
