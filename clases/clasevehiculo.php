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
		$vehiculos = $this->consultarRegistros("SELECT patente, marca, modelo, vehiculo.run, nombre, apellido
 			FROM vehiculo
            inner join usuario on usuario.run = vehiculo.run;");
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

	public function eliminarVehiculo(){
				$eliminarProv = $this->insertarRegistros
				("DELETE FROM vehiculo WHERE patente='".$this->patente."';");
				$consulta = $this->consultarRegistros("SELECT * FROM vehiculo where patente='".$this->patente."'");
				if($consulta = true){
					return "1";
				}else{
					return "2";
				}

	}
	public function modificarVehiculo(){
		$modificarVehiculo = $this->insertarRegistros
			("UPDATE vehiculo SET patente='".$this->patente."', marca='".$this->marca."', modelo='".$this->modelo."', run='".$this->run."' WHERE patente='".$this->patente."';");
	return $modificarVehiculo;
	}

	public function insertarVehiculo(){


			$verificar = $this->consultarExistencia("SELECT patente from vehiculo where patente= '".$this->patente."'");

			if($verificar==true){

				// echo "si hay";

				$modificarVehiculo = $this->insertarRegistros
					("UPDATE vehiculo SET patente='".$this->patente."', marca='".$this->marca."', modelo='".$this->modelo."', run='".$this->run."' WHERE patente='".$this->patente."';");

						return $modificarVehiculo;
			}
			else{

				// echo "no existe vehiculo";
					$agregarVehiculo = $this->insertarRegistros
					("INSERT INTO vehiculo (patente, marca, modelo, run) VALUES ('".$this->patente."', '".$this->marca."', '".$this->modelo."', '".$this->run."');");
						return $agregarVehiculo;
			}
		}


	public function cargarVehiculos($runVehiculo){
		$consulta = 'SELECT * FROM vervehiculos WHERE run = "'.$runVehiculo.'"';
		$resultado = $this->consultar($consulta);
		return $resultado;
	}


}
?>
