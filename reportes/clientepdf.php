<?php ob_start();
# Cargamos la librería dompdf.
require_once ('dompdf/dompdf_config.inc.php');
require_once ('../clases/usuario.php');
$user = new Usuario;
$sql = 'SELECT * FROM vistaclientes;';



// Introducimos HTML1 de prueba
?>


<html>

	<body>
		<table>
			<tr>
				<th>run</th>
				<th>nombre</th>
				<th>apellido</th>
				<th>tipo</th>
			</tr>
		<?php while ($consulta = $user->consultarRegistros($sql)) {
			$run = $consulta['run'];
			$nom = $consulta['nombre'];
			$ape = $consulta['apellido'];
			$tipo = $consulta['descripcion_tipo_usuario'];
		echo "<tr>
			<td><?php echo $run ?></td>
			<td><?php echo $nom ?> </td>
			<td><?php echo $ape ?> </td>
			<td><?php echo $tipo ?> </td>
		</tr>";
		} ?>

		</table>
	</body>
</html>
<?php
// Instanciamos un objeto de la clase DOMPDF.
$dompdf = new DOMPDF();

// Definimos el tamaño y orientación del papel que queremos.
$dompdf->set_paper("A4", "portrait");

// Cargamos el contenido HTML.
$dompdf->load_html(ob_get_clean());

// Renderizamos el documento PDF.
$dompdf->render();
$pdf= $dompdf->output();
$nombreArchivo='clientesActivos.pdf';
// Enviamos el fichero PDF al navegador.

$dompdf->stream($nombreArchivo, array('Attachment' => 0));

?>
