<?php
require_once '../clases/Conexion.php';
class CategoriaProducto extends Conexion{

	private $id_categoria_producto;
	private $descripcion_categoria_producto;


	public function __construct(){
		parent::__construct();
		

	}

	public function listarCategoriaProducto(){
		$catProducto = $this->consultarRegistros("SELECT * FROM figuesep.categoriaproducto;");
		return $catProducto;

}
public function setid_categoria_producto ($arg_id_categoria_producto){
		$this->id_estado_producto=$arg_id_estado_producto;
	}

public function setdescripcion_categoria_producto ($arg_descripcion_categoria_producto){
		$this->descripcion_categoria_producto=$arg_descripcion_categoria_producto;
	}


}
?>