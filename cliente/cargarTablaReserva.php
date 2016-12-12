<?php
session_start();
$run = $_SESSION['id'];
echo "el run es: ".$run;

 require_once '../clases/usuario.php';
 $user = new Usuario();
 $consulta = $user->cargarReservas($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
  $contador=0;
   while ($array = $user->convertir_array($consulta)) {
      $contador++;
    echo '
    <tr>
    <td><span class="hidden" id="txt_id_reserva'.$contador.'">'.$array['id_reserva'].'</span>
    <span id="txt_patente'.$contador.'">'.$array['patente']. '</span></td>
    <td><span id="txt_runReserva'.$contador.'">'.$array['run']. '</span></td>
    <td><span id="txt_marca'.$contador.'">'.$array['marca']. '</span></td>
    <td><span id="txt_modelo'.$contador.'">'.$array['modelo']. '</span></td>
    <td><span class="hidden" id="txt_id_servicio'.$contador.'">'.$array['id_servicio'].'</span>
    <span id="txt_servicio'.$contador.'">'.$array['descripcion_servicio']. '</span></td>
    <td><span id="txt_problema'.$contador.'">'.$array['descripcion_problema']. '</span></td>
    <td><span id="txt_fecha'.$contador.'">'.$array['fecha'].'</span></td>
    <td><span id="txt_hora'.$contador.'">'.$array['id_hora'].'</span></td>
    <td><span id="txt_descripcion_hora'.$contador.'">'.$array['descripcion_hora'].'</span></td>
    <td><span class="hidden" id="txt_id_estado_reserva'.$contador.'">'.$array['id_estado_reserva'].'</span>
    <span id="txt_descripcion_estado'.$contador.'">'.$array['descripcion_estado_reserva']. '</span></td>





      <td><a href="#" class="btn btn-warning" onclick="cargarMisReservas('.$contador.')" data-toggle="modal" data-target="#modal-auto">Modificar</a></td>
      <td><a href="#" class="btn btn-danger" onclick="eliminarReserva(\''.$array['id_reserva'].'\')">Eliminar</a></td>


      </tr>

    ';

   }

  //  <td>'.$array['fecha']. '</td>
  // <td>'.$array['hora']. '</td>
 // }else {
 //   echo '
 //    <tr>
 //      <td colspan="8">No existen registros asociados.</td>
 //    </tr>
 //   ';
 //   }


 ?>
