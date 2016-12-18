<?php

require_once "../clases/claseVenta.php";
$venta = new Venta();
session_start();
$runvendedor = $_SESSION['id'];
$venta->setrunVendedor($runvendedor);

$run = filter_var($_REQUEST['txt_run'], FILTER_SANITIZE_STRING);
$venta->setrun($run);

$fech=date('Y-m-d');
$venta->setfecha($fech);

if($venta->insertarVenta()){
    echo"1";
}else{
    echo"2";
}
 ?>
