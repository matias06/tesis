<?php
require_once 'Conexion.php';
class CategoriaProducto extends Conexion{

	private $id_categoria_producto;
	private $descripcion_categoria_producto;

	public function __construct(){
		parent::__construct();

	}

	public function listarCategoriaProducto(){
		$catProducto = $this->consultarRegistros("SELECT * FROM categoriaproducto;");
		return $catProducto;

	}
	public function setid_categoria_producto ($arg_id_categoria_producto){
			$this->id_categoria_producto=$arg_id_categoria_producto;
		}

	public function setdescripcion_categoria_producto ($arg_descripcion_categoria_producto){
			$this->descripcion_categoria_producto=$arg_descripcion_categoria_producto;
		}

	public function eliminarCatProducto(){
		$eliminarCatProducto = $this->insertarRegistros
		("DELETE FROM categoriaproducto WHERE id_categoria_producto = '".$this->id_categoria_producto."';");
		return $eliminarCatProducto;
	}


	public function insertarCatProducto(){

				$agregarCatProducto = $this->insertarRegistros
				("INSERT INTO categoriaproducto values (null, '".$this->descripcion_categoria_producto."')");
				return $agregarCatProducto;
	}

	public function modificarCatProducto(){

				$ModCatProducto = $this->insertarRegistros
				("UPDATE categoriaproducto SET descripcion_categoria_producto='".$this->descripcion_categoria_producto."'
				 WHERE id_categoria_producto='".$this->id_categoria_producto."'");
				return $ModCatProducto;
	}





}
?>
