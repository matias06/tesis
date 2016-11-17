<?php
	include '../comun/comun.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<script type="text/javascript">
		function imprSelec(contenedor)
		{var ficha=document.getElementById(contenedor);
			var ventimp=window.open(' ','popimpr');
				ventimp.document.write(ficha.innerHTML);ventimp.document.close();
					ventimp.print();ventimp.close();}
</script>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<?php cargarHeader(); ?>

<title>Reportes 1</title>
</head>
   
<body>
    
	<header>
		<?php cargarMenu(); ?>
	</header>	

	<div id="contenedor"> 
<table class="tabla">
<tr><th>Tabla</th><th>de ejemplo</th></tr>
<tr><td>datos...</td><td>datos....</td></tr>
<tr><td>datos...</td><td>datos...</td></tr>
</table>
</div>

<a href="javascript:imprSelec('contenedor')">Imprimir Tabla</a>
	
</body>
</html>