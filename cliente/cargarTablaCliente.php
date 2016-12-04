<?php
session_start();
$run = $_SESSION['id'];
echo $run;
 require_once '../clases/usuario.php';
 $user = new Usuario();
 $consulta = $user->verDatos($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
   while ($array = $user->convertir_array($consulta)) {
    echo '
      <tr>
      <td>'.$array['run']. '</td>
      <td>'.$array['nombre']. '</td>
      <td>'.$array['apellido']. '</td>
      <td>'.$array['password']. '</td>
      <td>'.$array['telefono']. '</td>
      <td>'.$array['correo']. '</td>
      <td><a href="#" class="btn btn-warning">modificar</a></td>
      </tr>

    ';

   }
?>
