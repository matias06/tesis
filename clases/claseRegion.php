<?php
require_once '../clases/Conexion.php';
class Region extends Conexion{

	private $idRegion;
	private $nombreRegion;
	
	public function __construct(){
		parent::__construct();
		

	}

	public function listarRegion(){
		$region = $this->consultarRegistros("SELECT * FROM region;");
		return $region;
		
	}


	public function setidRegion ($arg_idRegion){
		$this->idRegion=$arg_idRegion;
	}

	public function setnombreRegion ($arg_nombreRegion){
		$this->nombreRegion=$arg_nombreRegion;
	}

	


	public function eliminarRegion(){
			$eliminarRegion = $this->insertarRegistros
				("DELETE FROM REGION WHERE id_region = '".$this->idRegion."'" );
	}
    
    public function insertarRegion(){


		$verificar = $this->consultarExistencia("SELECT id_region from region where id_region= '".$this->idRegion."'");



		if($verificar==true){

			echo "Existe Region";

			$modificarRegion = $this->insertarRegistros
				("update region
					set
					nombre_region='".$this->nombreRegion."'
					where id_region = '".$this->idRegion."'");

		}
		else{

			echo "no existe region";
				$agregarRegion = $this->insertarRegistros
				("INSERT INTO region values (null, '".$this->nombreRegion."')");
		}
	}

}

?>