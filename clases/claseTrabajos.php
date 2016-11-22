<?php
require_once '../clases/Conexion.php';
class Trabajo extends Conexion{

	private $idTrabajo;
	private $nombreTrabajo;
    private $descripcionTrabajo;
    private $costo;
	private $idServicio;
	
    
	public function __construct(){
		parent::__construct();
		

	}

	public function listarTrabajo(){
		$trabajo = $this->consultarRegistros("SELECT * FROM trabajo;");
		return $trabajo;
		
	}


	public function setidTrabajo ($arg_idTrabajo){
		$this->idTrabajo=$arg_idTrabajo;
	}

	public function setnombreTrabajo ($arg_nombreTrabajo){
		$this->nombreTrabajo=$arg_nombreTrabajo;
	}
    
    public function setdescripcionTrabajo ($arg_descripcionTrabajo){
		$this->descripcionTrabajo=$arg_descripcionTrabajo;
	}
    
    public function setcosto ($arg_costo){
		$this->costo=$arg_costo;
	}

	public function setidServicio ($arg_idServicio){
		$this->idServicio=$arg_idServicio;
	}


	public function eliminarTrabajo(){
			$eliminarTrabajo = $this->insertarRegistros
				("DELETE FROM TRABAJO WHERE id_trabajo = '".$this->idTrabajo."'" );
	}
    
    public function insertarTrabajo(){


		$verificar = $this->consultarExistencia("SELECT id_trabajo from trabajo where id_trabajo= '".$this->idTrabajo."'");



		if($verificar==true){

			
			$modificarTrabajo = $this->insertarRegistros
				("update trabajo
					set
					nombre_trabajo='".$this->nombreTrabajo."',
                    descripcion_trabajo='".$this->descripcionTrabajo."',
                    costo='".$this->costo."',
                    id_servicio='".$this->idServicio."'
					where id_trabajo='".$this->idTrabajo."'");
            
            return $modificarTrabajo;

		}
		else{

				$agregarTrabajo = $this->insertarRegistros
				("INSERT INTO trabajo values (null, '".$this->nombreTrabajo."','".$this->descripcionTrabajo."','".$this->costo."', '".$this->idServicio."')");
            return $agregarTrabajo;
                
		}
	}

	}

?>