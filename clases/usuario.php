<?php
require_once '../clases/Conexion.php';
class Usuario extends Conexion{

	private $run;
	private $nombre;
	private $apellido;
	private $password;
	private $id_tipo_usuario;
	private $id_estado_usuario;


	public function __construct(){
		parent::__construct();


	}

	// public function listarUsuarios(){
	// 	$usuarios = $this->consultarRegistros("SELECT run, nombre, apellido, password, usuario.id_tipo_usuario, descripcion_tipo_usuario, usuario.id_estado_usuario, descripcion_estado_usuario
	// 		FROM usuario
	// 		inner join tipousuario on tipousuario.id_tipo_usuario = usuario.id_tipo_usuario
	// 		inner join estadousuario on estadousuario.id_estado_usuario = usuario.id_estado_usuario;");
	// 	return $usuarios;
	//
	// }

	public function listarUsuarios(){
	  $consulta="select * from vistaclientes";
	  $resultado= $this->consultarRegistros($consulta);
	  return $resultado;
	}


	public function setrun ($arg_run){
		$this->run=$arg_run;
	}

	public function setnombre ($arg_nombre){
		$this->nombre=$arg_nombre;
	}

	public function setapellido ($arg_apellido){
		$this->apellido=$arg_apellido;
	}

	public function setpassword ($arg_pass){
		$this->password=$arg_pass;
	}

	public function settipo_usuario ($arg_tipouser){
		$this->id_tipo_usuario=$arg_tipouser;
	}

	public function setestado_usuario ($arg_estadouser){
		$this->id_estado_usuario=$arg_estadouser;
	}

	public function eliminarUsuario(){
		// deja inactivos los clientes
			$agregarUsuarios = $this->insertarRegistros
				("UPDATE USUARIO SET id_estado_usuario = 2 WHERE run = '".$this->run."'" );
	}

	public function insertarUsuario(){


		$verificar = $this->consultarExistencia("SELECT run from usuario where run= '".$this->run."'");



		if($verificar==true){

			// echo "si hay";

			$modificarUsuarios = $this->insertarRegistros
				("update usuario
					set
					nombre='".$this->nombre."',
					apellido='".$this->apellido."',
					password='".$this->password."',
					id_tipo_usuario=".$this->id_tipo_usuario.",
					id_estado_usuario=".$this->id_estado_usuario."
					where run = '".$this->run."'");

		}
		else{

			// echo "no existe rut";
				$agregarUsuarios = $this->insertarRegistros
				("INSERT INTO usuario values ('".$this->run."', '".$this->nombre."' ,'".$this->apellido."',
				'".$this->password."','".$this->id_tipo_usuario."','".$this->id_estado_usuario."')");
		}
	}

    public function validarUsuario(){
        		$verificar = $this->consultarExistencia("SELECT run from usuario where run= '".$this->run."' and password= '".$this->password."'");

        return $verificar;
    }
    public function cargarUsuario(){
        $consulta = $this->consultarRegistros("SELECT * from usuario where run= '".$this->run."'");
        return $consulta;
    }
}

?>
