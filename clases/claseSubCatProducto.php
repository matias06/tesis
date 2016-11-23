<?php
require_once '../clases/Conexion.php';
class SubCatProducto extends Conexion{

	private $id_subcategoria_producto;
	private $descripcion_subcategoria_producto;
	private $id_categoria_producto;



	public function __construct(){
		parent::__construct();
	}

	public function listarSubCatProducto(){
		$subCat = $this->consultarRegistros("SELECT * FROM subcategoriaproducto;");
		return $subCat;

	}

	public function setid_subcategoria_producto ($arg_idsubcategoria_producto){
		$this->id_subcategoria_producto=$arg_idsubcategoria_producto;
	}

	public function setdescripcion_subcategoria_producto ($arg_descripcion_subcategoria_producto){
		$this->descripcion_subcategoria_producto=$arg_descripcion_subcategoria_producto;
	}

	public function setid_categoria_producto ($arg_id_categoria_producto){
		$this->id_categoria_producto=$arg_id_categoria_producto;
	}


	public function eliminarSubCat(){
			$eliminarSubCat = $this->insertarRegistros
				("DELETE FROM subcategoria WHERE id_subcategoria_producto = '".$this->id_categoria_producto."'" );
	}

    public function insertarSubCategoria(){


		$verificar = $this->consultarExistencia("SELECT id_subcategoria_producto from subcategoriaproducto where id_subcategoria_producto= '".$this->id_subcategoria_producto."'");



		if($verificar==true){


			$modificarSubCat = $this->insertarRegistros
				("UPDATE subcategoriaproducto
							 SET descripcion_subcategoria_producto='".$this->descripcion_subcategoria_producto."',
							 id_categoria_producto='".$this->id_categoria_producto."'
							 WHERE id_subcategoria_producto='".$this->id_subcategoria_producto."';");
            return $modificarSubCat;

		}
		else{

				$agregarSubCat = $this->insertarRegistros
				("INSERT INTO subcategoriaproducto (id_subcategoria_producto, descripcion_subcategoria_producto, id_categoria_producto) VALUES (NULL,'".$this->descripcion_subcategoria_producto."', '".$this->id_categoria_producto."');");
            return $agregarSubCat;

		}
	}

	}

?>