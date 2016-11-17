<?php
require_once '../clases/Conexion.php';
class EstadoUsuario extends Conexion{

	private $id_estado_usuario;
	private $descripcion_estado_usuario;

	public function __construct(){
		parent::__construct();
	}

public function listarEstadoUsuario(){
	$estado = $this->consultarRegistros("SELECT * FROM estadousuario;");
		return $estado;
		
	}
public function setid_estado_usuario ($arg_id_estado_usuario){
		$this->id_estado_usuario=$arg_id_estado_usuario;
	}

public function setid_descripcion_usuario ($arg_id_descripcion_usuario){
		$this->id_descripcion_usuario=$arg_id_descripcion_usuario;
	}	

} 
?>