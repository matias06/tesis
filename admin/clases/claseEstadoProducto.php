<?php
require_once '../clases/Conexion.php';
class EstadoProducto extends Conexion{

	private $id_estado_producto;
	private $descripcion_estado_producto;

	public function __construct(){
		parent::__construct();
	}

public function listarEstadoProducto(){
	$estadoProduc = $this->consultarRegistros("SELECT * FROM estadoproducto;");
		return $estadoProduc;
		
	}
public function setid_estado_producto ($arg_id_estado_producto){
		$this->id_estado_producto=$arg_id_estado_producto;
	}

public function setid_descripcion_producto ($arg_id_descripcion_producto){
		$this->id_descripcion_producto=$arg_id_descripcion_producto;
	}
}