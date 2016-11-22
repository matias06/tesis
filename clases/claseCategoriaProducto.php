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
	}
	public function insertarCatProducto(){
		$verificar = $this->consultarExistencia("SELECT id_categoria_producto from categoriaproducto where id_categoria_producto= '".$this->id_categoria_producto."'");



		if($verificar==true){

			//echo "Existe Categoria Producto";

			if($modificarCatProducto = $this->insertarRegistros
				("update categoriaproducto
					set
					descripcion_categoria_producto='".$this->descripcion_categoria_producto."'
					where id_categoria_producto = '".$this->id_categoria_producto."'")){

						return true;
					}

		}
		else{

			//echo "no existe categoria trabajo";
				if($agregarCatProducto = $this->insertarRegistros
				("INSERT INTO categoriaproducto values (null, '".$this->descripcion_categoria_producto."')")){

					return true;
				}

	}
}
}
?>
