<?php
require_once '../clases/Conexion.php';
class TipoUsuario extends Conexion{


	public function __construct(){
		parent::__construct();
		

	}

	public function listarTipoUsuario(){
		$tipoUsuario = $this->consultarRegistros("SELECT * FROM tipousuario;");
		return $tipoUsuario;

}
}
?>