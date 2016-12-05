<?php
session_start();
$run = $_SESSION['id'];
echo $run;
 require_once '../clases/clasevehiculo.php';
 $veh = new Vehiculo();
 $consulta = $veh->cargarVehiculos($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
 $contador=0;
   while ($array = $veh->convertir_array($consulta)) {
     $contador++;
    echo '
      <tr>
      
      <td><span id="txt_patente'.$contador.'">'.$array['patente']. '</span></td>
      <td><span id="txt_marca'.$contador.'">'.$array['marca']. '</span></td>
      <td><span id="txt_modelo'.$contador.'">'.$array['modelo']. '</span></td>
      <td><a href="#" class="btn btn-warning" onclick="cargarMisVehiculos('.$contador.')" data-toggle="modal" data-target="#modal-modificar-auto">modificar</a></td>

      <td><a href="#" class="btn btn-danger">eliminar</a></td>
      </tr>

    ';

   }
?>
