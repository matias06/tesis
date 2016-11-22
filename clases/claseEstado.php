<?php
require_once '../clases/Conexion.php';
class Estado extends Conexion{

	private $id_estado;
	private $descripcion_estado;

	public function __construct(){
		parent::__construct();
	}

public function listarEstado(){
	$estado = $this->consultarRegistros("SELECT * FROM estado");
		return $estado;
		
	}
public function setid_estado ($arg_id_estado){
		$this->id_estado=$arg_id_estado;
	}

public function setidescripcion_estado ($arg_descripcion_estado){
		$this->descripcion_estado=$arg_descripcion_estado;
	}
}