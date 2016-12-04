<?php
session_start();
$run = $_SESSION['id'];
echo $run;
 require_once '../clases/clasevehiculo.php';
 $veh = new Vehiculo();
 $consulta = $veh->cargarVehiculos($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
   while ($array = $veh->convertir_array($consulta)) {
    echo '
      <tr>
      <td>'.$array['patente']. '</td>
      <td>'.$array['marca']. '</td>
      <td>'.$array['modelo']. '</td>
      <td><a href="#" class="btn btn-warning">modificar</a></td>
      <td><a href="#" class="btn btn-danger">eliminar</a></td>
      </tr>

    ';

   }
?>
