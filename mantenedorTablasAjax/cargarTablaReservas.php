<?php
 require_once '../clases/usuario.php';
 $user = new Usuario();
 $consulta = $user->cargarReservasAll();

  $contador=0;
   while ($array = $user->convertir_array($consulta)) {
      $contador++;
    echo '
      <tr>
      <td><span id="txt_id_reserva'.$contador.'">'.$array['id_reserva']. '</span></td>
      <td><span id="txt_run'.$contador.'">'.$array['run']. '</span></td>
      <td><span id="txt_patente'.$contador.'">'.$array['patente']. '</span></td>
      <td><span id="txt_marca'.$contador.'">'.$array['marca']. '</span></td>
      <td><span id="txt_modelo'.$contador.'">'.$array['modelo']. '</span></td>
      <td><span class="hidden" id="txt_id_servicio'.$contador.'">'.$array['id_servicio'].'</span>
      <span id="txt_descripcion_servicio'.$contador.'">'.$array['descripcion_servicio']. '</span></td>
      <td><span id="txt_problema'.$contador.'">'.$array['descripcion_problema']. '</span></td>
      <td><span id="txt_fecha'.$contador.'">'.$array['fecha'].'</span></td>
      <td><span class="hidden" id="txt_hora'.$contador.'">'.$array['id_hora'].'</span>
      <span id="txt_descripcion_hora'.$contador.'">'.$array['descripcion_hora'].'</span></td>
      <td><span class="hidden" id="txt_id_estado_reserva'.$contador.'">'.$array['id_estado_reserva'].'</span>
      <span id="txt_descripcion_estado'.$contador.'">'.$array['descripcion_estado_reserva']. '</span></td>
      <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarEstado" class="btn btn-primary">Evaluar
      <span class="" aria-hidden="true"></span></td>
      </tr>

    ';

   }
 ?>
