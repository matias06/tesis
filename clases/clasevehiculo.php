<?php
require_once '../clases/Conexion.php';
class Vehiculo extends Conexion{

	private $patente;
	private $marca;
	private $modelo;
	private $run;


	public function __construct(){
		parent::__construct();


	}

	public function listarVehiculos(){
		$vehiculos = $this->consultarRegistros("SELECT * FROM vehiculo;");
		return $vehiculos;

}
public function setpatente ($arg_patente){
		$this->patente=$arg_patente;
	}

public function setmarca ($arg_marca){
		$this->marca=$arg_marca;
	}
public function setmodelo ($arg_modelo){
		$this->modelo=$arg_modelo;
	}

public function setrun ($arg_run){
		$this->run=$arg_run;
	}
	public function cargarVehiculos($runVehiculo){
		$consulta = 'SELECT * FROM vervehiculos WHERE run = "'.$runVehiculo.'"';
		$resultado = $this->consultar($consulta);
		return $resultado;
	}

}
?>
