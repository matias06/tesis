<?php
session_start();
// $run = $_SESSION['id'];
// echo $run;
 require_once '../clases/claseMensaje.php';
 $mensaje = new Mensaje();
 $consulta = $mensaje->listarMensajes();

  $contador=0;
   while ($array = $mensaje->convertir_array($consulta)) {
      $contador++;
    echo '
      <tr>
      <td><span id="txt_id_mensaje'.$contador.'">'.$array['id_mensaje']. '</span></td>
      <td><span id="txt_fecha_mensaje'.$contador.'">'.$array['fecha_mensaje']. '</span></td>
      <td><span id="txt_nombre'.$contador.'">'.$array['nombre_remitente']. '</span></td>
      <td><span id="txt_apellido'.$contador.'">'.$array['apellido_remitente']. '</span></td>
      <td><span id="txt_correo'.$contador.'">'.$array['correo_remitente']. '</span></td>
      <td><span id="txt_mensaje'.$contador.'">'.$array['mensaje']. '</span></td>
      <td><button type="button" onclick="" data-toggle="#" data-target="#" class="btn btn-success">
      <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></td>
      <td><button type="button" onclick="" data-toggle="#" data-target="#" class="btn btn-danger">
      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
        </tr>

    ';

   }
 ?>
