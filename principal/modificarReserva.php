<?php
require_once'../clases/claseReserva.php';
$estado = new Reserva();

$estdo->setid_reserva($_REQUEST['txt_id_reserva_modificar']);
$estado->setid_estado_reserva($_REQUEST['cmb_estado_reserva']);


echo"idcity:".$_REQUEST['txt_idciudad_modificar'];
echo"nombrecity:".$_REQUEST['txt_nombreCiudad_modificar'];
echo"idregion:".$_REQUEST['cmb_region_modificar'];
$estado->reservaAdmin();

 ?>
