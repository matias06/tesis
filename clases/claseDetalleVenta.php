<?php
require_once '../clases/Conexion.php';
require_once '../clases/claseVenta.php';
$venta = new Venta();
class DetalleVenta extends Conexion{

	private $cantidad;
	private $id_producto;
	private $id_venta;


	public function __construct(){
		parent::__construct();
	}

	public function setcantidad ($arg_cantidad){
		$this->cantidad=$arg_cantidad;
	}

	public function setidproducto ($arg_id_producto){
		$this->id_producto=$arg_id_producto;
	}

	public function setidventa (){
		$this->id_venta=$venta->consultarUltimaVenta();
	}


  public function insertarDetalleVenta(){
		$agregarDetalleVenta = $this->insertarRegistros("INSERT INTO detalleventa values (null, '".$this->cantidad."','".$this->id_producto."', '".$this->id_venta."')");
    return $agregarDetalleVenta;
	}

  // public function listarMensajes(){
	// 	$men = "SELECT * FROM mensajes";
	// 	$resultado = $this->consultar($men);
	// 	return $resultado;
  //
  // }

	}

?>
