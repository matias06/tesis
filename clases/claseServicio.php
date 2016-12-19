<?php
require_once '../clases/Conexion.php';
class Servicio extends Conexion{

	private $idServicio;
	private $descripcionServicio;

	public function __construct(){
		parent::__construct();
	}

	public function listarServicio(){
		$servicio = $this->consultarRegistros("SELECT * FROM servicio");
		return $servicio;

	}


	public function setidServicio ($arg_idServicio){
		$this->idServicio=$arg_idServicio;
	}

	public function setdescripcionServicio ($arg_descripcionServicio){
		$this->descripcionServicio=$arg_descripcionServicio;
	}

	public function eliminarServicio(){
			$eliminarServicio = $this->insertarRegistros
				("DELETE FROM SERVICIO WHERE id_servicio = '".$this->idServicio."'" );
				return $eliminarServicio;
	}

    public function insertarServicio(){


		$verificar = $this->consultarExistencia("SELECT id_servicio from servicio where id_servicio= '".$this->idServicio."'");



		if($verificar==true){

			echo "Existe Servicio";

			$modificarServicio = $this->insertarRegistros
				("update servicio
					set
					descripcion_servicio='".$this->descripcionServicio."'
					where id_servicio = '".$this->idServicio."'");

		}
		else{

			echo "no existe servicio";
				$agregarServicio = $this->insertarRegistros
				("INSERT INTO servicio values (null, '".$this->descripcionServicio."')");
		}
	}

}

?>
