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
	private $fecha;
	private $id_hora;
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
public function setfechaReserva ($arg_fechaReserva){
			  $this->fechaReserva=$arg_fechaReserva;
			 }
public function set_horaReserva ($arg_horaReserva){
        $this->horaReserva=$arg_horaReserva;
      }
public function setid_estado_reserva ($arg_id_estado_reserva){
				$this->id_estado_reserva=$arg_id_estado_reserva;
			}
public function setdescripcion_estado_reserva ($arg_descripcion_estado_reserva){
      	$this->descripcion_estado_reserva=$arg_descripcion_estado_reserva;
      }

		 public function insertarReservas(){
	 		$verificar = $this->consultarExistencia("SELECT id_reserva from reserva where id_reserva= '".$this->id_reserva."'");
			if($verificar==true){
				// echo "si hay";

				$modificarUsuarios = $this->insertarRegistros
					("UPDATE reserva SET
					id_servicio='".$this->id_servicio."',
					 descripcion_problema='".$this->descripcion_problema."',
						fecha='".$this->fechaReserva."', id_hora='".$this->horaReserva."'
						 WHERE id_reserva='".$this->id_reserva."'");

			}
			else{

						"INSERT INTO reserva (id_reserva,run, patente, id_servicio, descripcion_problema, fecha, id_estado_reserva, id_hora)
					VALUES (NULL,'".$this->run."','".$this->patente."','".$this->id_servicio."','".$this->descripcion_problema."','".$this->fechaReserva."', '".$this->id_estado_reserva."','".$this->horaReserva."');";
					if($this->insertarRegistros($consulta)){
						return true;
					}else{
						return false;
					}
			}
			}
		 
public function reservaAdmin(){
	$consulta="UPDATE reserva SET
	 id_estado_reserva='".$this->setid_estado_reserva."'
	 WHERE id_reserva='".$this->id_reserva."'";
	 $modificarReserva = $this->insertarRegistros($consulta);
	// echo "hola pepo".$consulta;
			if($modificarReserva==true){
				return true;
			}
			else{
				echo "ERROR AL MODIFICAR RESERVA; ERROR: ".$consulta;
			}
}


}
