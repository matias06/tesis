<?php ob_start();
# Cargamos la librería dompdf.
require_once ('dompdf/dompdf_config.inc.php');
require_once ('../clases/usuario.php');
// Introducimos HTML1 de prueba
$html='';

// Instanciamos un objeto de la clase DOMPDF.
$dompdf = new DOMPDF();

// Definimos el tamaño y orientación del papel que queremos.
$dompdf->set_paper("A4", "portrait");

// Cargamos el contenido HTML.
$dompdf->load_html(ob_get_clean($html));

// Renderizamos el documento PDF.
$dompdf->render();
$pdf= $dompdf->output();
$nombreArchivo='clientesActivos.pdf';
// Enviamos el fichero PDF al navegador.

$dompdf->stream($nombreArchivo, array('Attachment' => 0));

?>
