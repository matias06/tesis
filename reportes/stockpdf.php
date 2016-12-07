<?php ob_start();
# Cargamos la librería dompdf.
//require_once '../clases/.php';
require_once'../clases/claseProductos.php';
require_once ('dompdf/dompdf_config.inc.php');
$conexion = new Conexion();


$productos=new Productos();


// Introducimos HTML1 de prueba
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
</style>
		<div class="col-xs-12 col-sm-6 col-md-4">
	      <a href="../principal/indexAdmin.php"><img src="../comun/logo/fsp.png" alt="" width="230" height="60"></a>
	  </div>

		<center><h1> Lista Stock </h1></center>
				<div style="text-align:center;">
					<table class="table table-bordered table-hover table-condensed" id="tablaStock">
									<thead class="active danger tablaHead">
											<th>Código producto</th>
											<th>Producto</th>
											<th>Valor</th>
											<th>Estado producto</th>
											<th>Stock</th>

									</thead>
									<tbody>
									<?php

									// $productos->setStock($_REQUEST['stock']);
									$filas= $productos->listarStock();

									foreach($filas as $columnas){

							 ?>
									<tr>
										<td><?php echo $columnas['id_producto'];  ?></td>
										<td><?php echo $columnas['descripcion_producto'];  ?></td>
										<td><?php echo $columnas['valor_producto'];  ?></td>
										<td><?php echo $columnas['id_estado_producto'];  ?></td>
										<td><?php echo $columnas['stock'];  ?></td>

					<?php      } ?>
						</tbody>
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
$nombreArchivo='stockProductos.pdf';
// Enviamos el fichero PDF al navegador.

$dompdf->stream($nombreArchivo, array('Attachment' => 0));

?>
