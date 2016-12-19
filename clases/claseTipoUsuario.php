<?php
require_once '../clases/Conexion.php';
class TipoUsuario extends Conexion{
	private $id_tipo_usuario;
	private $descripcion_tipo_usuario;


	public function __construct(){
		parent::__construct();


	}

	public function listarTipoUsuario(){
		$tipoUsuario = $this->consultarRegistros("SELECT * FROM tipousuario;");
		return $tipoUsuario;

}
}
?>
