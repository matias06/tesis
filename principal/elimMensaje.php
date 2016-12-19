<?php
require_once "../clases/claseMensaje.php";
$message = new Mensaje();

$message->setid($_REQUEST['id']);


if($message->eliminarMensaje()){
    echo"1";

}else{
    echo"2";
}


 ?>
