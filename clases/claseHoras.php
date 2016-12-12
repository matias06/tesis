<?php
require_once '../clases/Conexion.php';
class Horas extends Conexion{

	private $id_hora;
	private $descripcion_hora;

	public function __construct(){
		parent::__construct();
	}

public function listarHora(){
	$hora = $this->consultarRegistros("SELECT * FROM hora");
		return $hora;

	}
public function set_hora ($arg_id_hora){
		$this->id_hora=$arg_id_hora;
	}

public function setidescripcion_hora ($arg_descripcion_hora){
		$this->descripcion_hora=$arg_descripcion_hora;
	}
}
