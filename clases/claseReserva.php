<?php
require_once '../clases/Conexion.php';
class Reserva extends Conexion{

	private $id_reserva;
	private $run;
  private $patente;
  private $marca;
  private $modelo;
  private $id_servicio;
  private $descripcion_servicio;
  private $descripcion_problema;
  private $id_estado_reserva;
  private $descripcion_estado_reserva;

	public function __construct(){
		parent::__construct();
	}

  public function listarReserva(){
    $consulta="select * from verreserva where id_reserva=".$this->id_reserva;
    $resultado= $this->consultarRegistros($consulta);
    return $resultado;
  }
public function setid_reserva ($arg_id_reserva){
		$this->id_reserva=$arg_id_reserva;
	}

public function setrun ($arg_run){
		$this->run=$arg_run;
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
public function setid_servicio ($arg_id_servicio){
       $this->id_servicio=$arg_id_servicio;
    	}
public function setdescripcion_servicio ($arg_descripcion_servicio){
        $this->descripcion_servicio=$arg_descripcion_servicio;
    	}
public function setdescripcion_problema ($arg_descripcion_problema){
        $this->descripcion_problema=$arg_descripcion_problema;
      }
public function setid_estado_reserva ($arg_id_estado_reserva){
        $this->id_estado_reserva=$arg_ruid_estado_reserva;
      }
public function setdescripcion_estado_reserva ($arg_descripcion_estado_reserva){
      	$this->descripcion_estado_reserva=$arg_descripcion_estado_reserva;
                	}
}

    public function insertarReservas(){


  $verificar = $this->consultarExistencia("SELECT id_reserva from reserva where id_reserva= '".$this->id_reserva."'");



  if($verificar==true){

    // echo "si hay";

    $modificarReservas = $this->insertarRegistros
      ("UPDATE reserva
         SET
          id_reserva='".$this->id_reserva."',
          run='".$this->run."',
          patente='".$this->patente."',
          id_servicio='".$this->id_servicio."',
          descripcion_problema='".$this->descripcion_problema."',
          id_estado_reserva='".$this->id_estado_reserva."'
           WHERE id_reserva='".$this->id_reserva."';");

  }
  else{

    // echo "no existe rut";
      $agregarReservas = $this->insertarRegistros
      ("INSERT INTO reserva (id_reserva, run, patente, id_servicio, descripcion_problema, id_estado_reserva)
      VALUES ('".$this->id_reserva."',
      '".$this->id_run."',
      '".$this->id_patente."',
      '".$this->id_servicio."',
      '".$this->descripcion_problema."',
      '".$this->id_estado_reserva."');");
  }
}
