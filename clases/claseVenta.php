<?php
require_once '../clases/Conexion.php';
class Venta extends Conexion{

	private $runVendedor;
	private $run;
	private $fecha;


	public function __construct(){
		parent::__construct();
	}

	public function setrunVendedor ($arg_runVendedor){
		$this->runVendedor=$arg_runVendedor;
	}
	public function setrun ($arg_run){
		$this->run=$arg_run;
	}
	public function setfecha ($arg_fecha){
		$this->fecha=$arg_fecha;
	}


  public function insertarVenta(){
		$agregarVenta = $this->insertarRegistros("INSERT INTO venta values (null, '".$this->fecha."','".$this->run."', '".$this->runVendedor."')");
    return $agregarVenta;
	}

	public function consultarUltimaVenta(){
		$numeroVenta = "select max(id_venta) from venta";
		$resultado = $this->consultar($numeroVenta);
		return $resultado;

	}

  // public function listarMensajes(){
	// 	$men = "SELECT * FROM mensajes";
	// 	$resultado = $this->consultar($men);
	// 	return $resultado;
  //
  // }


	}

?>
