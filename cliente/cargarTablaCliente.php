<?php
session_start();
$run = $_SESSION['id'];
echo $run;
 require_once '../clases/usuario.php';
 $user = new Usuario();
 $consulta = $user->verDatos($run);
 //  $filas = $user->cantidadRegis($consulta);
 // if($filas > 0){
 $contador=0;
   while ($array = $user->convertir_array($consulta)) {
       $contador++;
    echo '
      <tr>

      <td><span id="txt_run'.$contador.'">'.$array['run'].'</span></td>
      <td><span id="txt_nombre'.$contador.'">'.$array['nombre'].'</span></td>
      <td><span id="txt_apellido'.$contador.'">'.$array['apellido'].'</span></td>
      <td><span id="txt_password'.$contador.'">'.$array['password'].'</span></td>
      <td><span id="txt_telefono'.$contador.'">'.$array['telefono'].'</span></td>
      <td><span id="txt_correo'.$contador.'">'.$array['correo'].'</span></td>
      <td><span class="hidden" id="txt_descripcionTipo1'.$contador.'">'.$array['id_tipo_usuario'].'</span>
      <span id="txt_descripcionTipo'.$contador.'">'.$array['descripcion_tipo_usuario'].'</span></td>

      <td><span class="hidden" id="txt_descripcion_Estado1'.$contador.'">'.$array['id_estado_usuario'].'</span>
      <span id="txt_estadoTipo'.$contador.'">'.$array['descripcion_estado_usuario'].'</span></td>
      <td><a href="#" class="btn btn-warning" onclick="cargarMisDatos('.$contador.')" data-toggle="modal" data-target="#modal-datos">Modificar</a></td>

      </tr>

    ';

   }
?>
<!-- <li><a href="#" onclick="cargarDatosModal()" data-toggle="modal" data-target="#usuario">Crear Usuario</a></li> -->
