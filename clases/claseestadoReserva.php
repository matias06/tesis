<?php
require_once '../clases/Conexion.php';
class EstadoReserva extends Conexion{

	private $id_estado_reserva;
	private $descripcion_estado_reserva;

	public function __construct(){
		parent::__construct();
	}

public function listarEstadoReserva(){
	$estadoreserva = $this->consultarRegistros("SELECT * FROM estadoreserva");
		return $estadoreserva;

	}
public function setid_estado_reserva ($arg_id_estado_reserva){
		$this->id_estado_reserva=$arg_id_estado_reserva;
	}

public function setidescripcion_estado_reserva ($arg_descripcion_estado_reserva){
		$this->descripcion_estado_reserva=$arg_descripcion_estado_reserva;
	}
}
