<?php
require_once '../clases/Conexion.php';
class CategoriaTrabajo extends Conexion{

	private $id_categoria_trabajo;
	private $descripcion_categoria_trabajo;


	public function __construct(){
		parent::__construct();
		

	}

	public function setid_categoria_trabajo ($arg_id_categoria_trabajo){
		$this->id_categoria_trabajo=$arg_id_categoria_trabajo;
	}

public function setdescripcion_categoria_trabajo ($arg_descripcion_categoria_trabajo){
		$this->descripcion_categoria_trabajo=$arg_descripcion_categoria_trabajo;
	}

	public function listarCategoriaTrabajo(){
		$categoriaTrabajo = $this->consultarRegistros("SELECT * FROM categoriatrabajo;");
		return $categoriaTrabajo;

}

public function insertarCatTrabajos(){
				$consulta= "INSERT INTO categoriatrabajo (id_categoria_trabajo, descripcion_categoria_trabajo)
				 VALUES (null, '".$this->descripcion_categoria_trabajo."');";
				//echo $consulta;	
				$agregarCatTrabajo = $this->insertarRegistros($consulta);
}

public function eliminarCatTrabajo(){
        $verificar= $this->insertarRegistros("DELETE FROM categoriatrabajo WHERE id_categoria_trabajo='".$this->id_categoria_trabajo."';");

                // if($verificar){
                //       return truer;
                // }else{
                //     echo " fallo al eliminar producto";
                // }
    }
}
?>

