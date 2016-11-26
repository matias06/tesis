<?php
require_once '../clases/Conexion.php';
class Compra extends Conexion{

  private $idCompra;
	private $fecha;
  private $idUsuario;
  private $rut;

  private $producto;
  private $cantidad;
  private $valor;



	public function __construct(){
		parent::__construct();


	}

public function setIdCompra($arg_idCompra){
  		$this->idCompra=$arg_idCompra;
}
public function setProducto($arg_producto){
  $this->producto=$arg_producto;
}


public function setfecha ($arg_fecha){
		$this->fecha=$arg_fecha;
	}

public function setidUsuario ($arg_idUsuario){
		$this->idUsuario=$arg_idUsuario;
	}
public function setcantidad ($arg_cantidad){
		$this->cantidad=$arg_cantidad;
	}
public function setvalor ($arg_valor){
		$this->valor=$arg_valor;
	}
  public function setrut ($arg_rut){
  		$this->rut=$arg_rut;
  	}


public function insertarCompra(){


$resultado = $this->consultarRegistros("select max(id_compra)+1 as id from compraproveedor");
$nuevoId= $resultado[0]['id'];

  if($this->insertarRegistros("INSERT INTO compraproveedor (id_compra,fecha, rut, run)
  VALUES ($nuevoId,'".$this->fecha."', '".$this->rut."', '".$this->idUsuario."');")){

        $_SESSION['idCompra']=$nuevoId;
        return true;
  }else{
      return false;
  }

}
public function insertarDetalle(){

if($this->insertarRegistros("INSERT INTO detallecompra (`cantidad`, `valor`, `id_compra`, `id_producto`) VALUES ('".$this->cantidad."', '".$this->valor."', '".$this->idCompra."', '".$this->producto."');")){

        return true;
  }else{
      return false;
  }

}


}
?>
