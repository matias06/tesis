<?php
session_start();
$run = $_SESSION['id'];
echo $run;
 require_once '../clases/usuario.php';
 $user = new Usuario();
 $consulta = $user->cargarReservas($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
   while ($array = $user->convertir_array($consulta)) {
    echo '
      <tr>
      <td>'.$array['patente']. '</td>
      <td>'.$array['marca']. '</td>
      <td>'.$array['modelo']. '</td>
      <td>'.$array['descripcion_servicio']. '</td>
      <td>'.$array['descripcion_problema']. '</td>
      <td>'.$array['descripcion_estado_reserva']. '</td>
      <td><a href="#" class="btn btn-warning">modificar</a></td>
      <td><a href="#" class="btn btn-danger">eliminar</a></td>
      </tr>

    ';

   }
 // }else {
 //   echo '
 //    <tr>
 //      <td colspan="8">No existen registros asociados.</td>
 //    </tr>
 //   ';
 //   }


 ?>
