<?php
require_once'../clases/usuario.php';

$run=$_REQUEST['run_usuario'];
$password=$_REQUEST['password_usuario'];

$user = new Usuario();

$user->setrun($run);
$user->setpassword($password);

if($user->validarUsuario()){
  $resultado = $user->cargarUsuario();
    
session_start();
    
    $_SESSION['id']=$resultado[0]['run'];
    $_SESSION['nombre']=$resultado[0]['nombre'];
    $_SESSION['tipo']=$resultado[0]['id_tipo_usuario'];
    
    if($_SESSION['tipo'] == '1'){
        echo "1";
    }else{
        echo "2";
    }
    
    
}else{
    echo "0";
}

?>