<?php ob_start();
# Cargamos la librería dompdf.
require_once ('dompdf/dompdf_config.inc.php');
require_once'../clases/usuario.php';
$conexion = new Conexion();
$user=new Usuario();


// Introducimos HTML
?>


<html lang="es">

	<body>

	<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:10mm auto; width:100%;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align: center;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;border-top-width:1px;border-bottom-width:1px;}
.tg .tg-8ujv{font-size:18px;font-family:Arial, Helvetica, sans-serif !important;;background-color:#efefef;text-align:center}
.tg .tg-ddk4{font-size:18px;font-family:Arial, Helvetica, sans-serif !important;;background-color:#efefef;text-align:center;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top}
/*.filasReporte:nth-child(even){background:red;}*/
</style>
		<div class="col-xs-12 col-sm-6 col-md-4">
	      <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="230" height="60"></a>
	  </div>

		<center><h1> Lista de Clientes Activos </h1></center>
				<div style="text-align:center;">
										<table style="margin: 0 auto;" class="tg">
										<tr>
											<td>run</td>
											<td>nombre</td>
											<td>apellido</td>

										</tr>
										<?php

										$filas= $user->listarUsuarios();
										foreach($filas as $columnas){
								 ?>
										<tr>
											<td><?php echo $columnas['run']; ?></td>
											<td><?php echo $columnas['nombre']; ?></td>
											<td><?php echo $columnas['apellido']; ?></td>

							</tr>
							  <?php      } ?>
									</table>
					</div>
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
