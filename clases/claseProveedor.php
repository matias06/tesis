<?php
require_once '../clases/Conexion.php';
class Proveedor extends Conexion{

private $rut;
private $razon_social;
private $direccion_proveedor;
private $telefono;
private $correo;
private $id_estado;

	public function __construct(){
		parent::__construct();
		

	}

	public function listarProveedor(){
		$proveedor = $this->consultarRegistros("SELECT rut, razon_social, direccion_proveedor, telefono, correo, estado.id_estado, descripcion_estado
 			FROM proveedor
            inner join estado on estado.id_estado = proveedor.id_estado;");
		return $proveedor;


}

public function setrut ($arg_rut){
		$this->rut=$arg_rut;
	}

public function setrazon_social ($arg_razon_social){
		$this->razon_social=$arg_razon_social;
	}

public function setdireccion_proveedor ($arg_direccion_proveedor){
		$this->direccion_proveedor=$arg_direccion_proveedor;
	}

public function settelefono ($arg_telefono){
		$this->telefono=$arg_telefono;
	}

public function setcorreo ($arg_correo){
		$this->correo=$arg_correo;
	}
public function setid_estado ($arg_id_estado){
		$this->id_estado=$arg_id_estado;
	}

public function insertarProveedor(){


		$verificar = $this->consultarExistencia("SELECT rut from proveedor where rut= '".$this->rut."'");

		if($verificar==true){

			echo "si hay";

			$modificarProveedor = $this->insertarRegistros
				("UPDATE proveedor SET razon_social='".$this->razon_social."', direccion_proveedor='".$this->direccion_proveedor."',
 					telefono='".$this->telefono."',
  					correo='".$this->correo."', id_estado='".$this->id_estado."' 
  					WHERE rut='".$this->rut."'");

		}
		else{

			echo "no existe rut";
				$agregarProveedor = $this->insertarRegistros
				("INSERT INTO proveedor 
					(rut, razon_social, direccion_proveedor, telefono, correo, id_estado) 
						VALUES ('".$this->rut."', '".$this->razon_social."', '".$this->direccion_proveedor."',
								 '".$this->telefono."', '".$this->correo."', '".$this->id_estado."')");
		}
	}

	// public function insertarProveedor(){

		
	// 	$consulta= ("INSERT INTO proveedor (rut, razon_social, direccion_proveedor, telefono, correo, id_estado)
	// 			 VALUES('".$this->rut."', '".$this->razon_social."',
	// 			 		 '".$this->direccion_proveedor."', '".$this->telefono."', '".$this->correo."', '".$this->id_estado."')");
	// 	$agregarProveedor = $this->insertarRegistros($consulta);
	// 	   if($consulta){
 //                      echo "2";
 //                }else{
 //                    echo "fallo al ingresar producto";
 //                }
	// 		//echo $consulta;			
	// 		}


	public function actualizarProveedor(){
	
	//UPDATE figuesep.proveedor SET razon_social='Chevroletee', direccion_proveedor='angoleee', telefono='453333', correo='update@gmail.comd', id_estado='2' WHERE rut='123';		
$consulta="UPDATE proveedor SET razon_social='".$this->razon_social."', direccion_proveedor='".$this->direccion_proveedor."',
 telefono='".$this->telefono."',
  correo='".$this->correo."', id_estado='".$this->id_estado."' 
  WHERE rut='".$this->rut."';";

			$modificarProveedor = $this->insertarRegistros($consulta);
			if($modificarProveedor==true){
                      return true;
            }else{
                    echo "ERROR AL MODIFICAR PRODUCTO; ERROR: ".$consulta;
                 }

	}

	public function eliminarProveedor(){
				$eliminarProv = $this->insertarRegistros
				("UPDATE proveedor SET id_estado='".$this->id_estado."' WHERE rut='".$this->rut."';");
	}
}
?>