<?php
require_once '../clases/Conexion.php';
class Ciudad extends Conexion{

	private $idCiudad;
	private $nombreCiudad;
	private $idRegion;
	


	public function __construct(){
		parent::__construct();
		

	}

	public function listarCiudad(){
		$ciudad = $this->consultarRegistros("SELECT * FROM figuesep.ciudad;");
		return $ciudad;
		
	}


	public function setidCiudad ($arg_idCiudad){
		$this->idCiudad=$arg_idCiudad;
	}

	public function setnombreCiudad ($arg_nombreCiudad){
		$this->nombreCiudad=$arg_nombreCiudad;
	}

	public function setidRegion ($arg_idRegion){
		$this->idRegion=$arg_idRegion;
	}


	public function eliminarCiudad(){
			$eliminarCiudad = $this->insertarRegistros
				("DELETE FROM CIUDAD WHERE id_ciudad = '".$this->idCiudad."'" );
	}
    
    public function insertarCiudad(){


		$verificar = $this->consultarExistencia("SELECT id_ciudad from ciudad where id_ciudad= '".$this->idCiudad."'");



		if($verificar==true){

			
			$modificarCiudad = $this->insertarRegistros
				("update ciudad
					set
					nombre_ciudad='".$this->nombreCiudad."',
                    id_region='".$this->idRegion."'
					where id_ciudad='".$this->idCiudad."'");
            return $modificarCiudad;

		}
		else{

				$agregarCiudad = $this->insertarRegistros
				("INSERT INTO ciudad values (null, '".$this->nombreCiudad."', '".$this->idRegion."')");
            return $agregarCiudad;
                
		}
	}

	}

?>