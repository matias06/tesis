<?php
require_once 'Conexion.php';
class Productos extends Conexion{

	private $id_producto;
	private $descripcion_producto;
	private $valor_producto;
	private $imagen;
	private $rut;
	private $id_estado_producto;
	private $id_categoria_producto;
	private $stock;

	public function __construct(){
		parent::__construct();


	}
	// mostrar todos los datos de la base datos de productos
	 public function listarProductos(){
	 	$productos = $this->consultarRegistros("SELECT id_producto, descripcion_producto, valor_producto,
	 		imagen, rut, producto.id_estado_producto, descripcion_estado_producto, producto.id_categoria_producto, descripcion_categoria_producto
	 	from producto
	 	inner join estadoproducto on estadoproducto.id_estado_producto = producto.id_estado_producto
	 	inner join categoriaproducto on categoriaproducto.id_categoria_producto = producto.id_categoria_producto;");
	 	return $productos;

	 	}

		public function listarStock(){
		  $consulta="select * from vistastockproductos";
		  $resultado= $this->consultarRegistros($consulta);
		  return $resultado;
		}
		// public function listarDetalleCompra(){
		//   $consulta="select * from vistaDetalleCompraProducto where id_compra=".$this->idCompra;
		//   $resultado= $this->consultarRegistros($consulta);
		//   return $resultado;
		// }

		public function setStock ($arg_stock){
			$this->stock=$arg_stock;
		}

	public function setid_producto ($arg_id_producto){
		$this->id_producto=$arg_id_producto;
	}

	public function setdescripcion_producto ($arg_descripcion_producto){
		$this->descripcion_producto=$arg_descripcion_producto;
	}

	public function setvalor_producto ($arg_valor_producto){
		$this->valor_producto=$arg_valor_producto;
	}

	public function setimagen ($arg_imagen){
		$this->imagen=$arg_imagen;
	}

	public function setrut ($arg_rut){
		$this->rut=$arg_rut;
	}

	public function setestado_producto ($arg_estado_producto){
		$this->id_estado_producto=$arg_estado_producto;
	}
	public function setcategoria_producto ($arg_categoria_producto){
		$this->id_categoria_producto=$arg_categoria_producto;
	}


	public function insertarProductos(){

        $verificar = $this->consultarExistencia("SELECT id_producto from producto where id_producto= '".$this->id_producto."'");



		if($verificar==true){

			// echo "si hay";

			$modificarProducto = $this->insertarRegistros
				("update producto
					set
					descripcion_producto=".$this->descripcion_producto.",
					valor_producto='".$this->valor_producto."',
					imagen='".$this->imagen."',
					rut='".$this->rut."',
					id_estado_producto='".$this->id_estado_producto."',
                    id_categoria_producto='".$this->id_categoria_producto."'
					where id_producto ='".$this->id_producto."'");
            return $modificarProducto;

		}
		else{

			// echo "No existe Producto";
				$agregarProducto = $this->insertarRegistros
				("INSERT INTO producto values ('".$this->id_producto."','".$this->descripcion_producto."',
					'".$this->valor_producto."','".$this->imagen."','".$this->rut."','".$this->id_estado_producto."',
					'".$this->id_categoria_producto."')");
            return $agregarProducto;
		}


				/*$consulta= "INSERT INTO figuesep.producto values ('".$this->id_producto."', '".$this->descripcion_producto."' ,".$this->valor_producto.",
				'".$this->imagen."','".$this->rut."','".$this->id_estado_producto."','".$this->id_categoria_producto."')";
				//echo $consulta;
				$agregarProductos = $this->insertarRegistros($consulta);

                if($consulta){
                      echo "2";
                }else{
                    echo "fallo al ingresar producto";
                }*/
    }

    public function eliminarProductos(){
        $verificar= $this->insertarRegistros("UPDATE producto set
                                    id_estado_producto=".$this->id_estado_producto."
                                    where id_producto='".$this->id_producto."'");

                if($verificar){
                      return true;
                }else{
                    echo "fallo al eliminar producto: ";
                }
    }

    public function modificarProductos(){
    $consulta="UPDATE producto SET descripcion_producto='".$this->descripcion_producto."',
		   valor_producto='".$this->valor_producto."', imagen='".$this->imagen."', rut='".$this->rut."',
		    id_estado_producto='".$this->id_estado_producto."', id_categoria_producto='".$this->id_categoria_producto."'
		    WHERE id_producto='".$this->id_producto."';";

    $modificarProducto = $this->insertarRegistros($consulta);

		    if($modificarProducto==true){
		    	return true;
		    }
		    else{
		    	echo "ERROR AL MODIFICAR PRODUCTO; ERROR: ".$consulta;
		    }

    }
		public function listar_producto_x_categoria($idcategoria){
				$consulta = $this->consultarRegistros("SELECT * FROM producto WHERE id_categoria_producto = ".$idcategoria."");
			 // echo "SELECT * FROM producto WHERE id_categoria_producto = ".$idcategoria."";
				return $consulta;
		}
		public function listar_producto_x_subcategoria($idcategoria,$idsubcategoria){
				$consulta = $this->consultarRegistros("SELECT id_producto, descripcion_producto, valor_producto, imagen, producto.id_categoria_producto, producto.id_subcategoria_producto, descripcion_subcategoria_producto FROM producto inner join subcategoriaproducto on subcategoriaproducto.id_subcategoria_producto = producto.id_subcategoria_producto WHERE producto.id_categoria_producto = ".$idcategoria." and producto.id_subcategoria_producto = ".$idsubcategoria."");
			 // echo "SELECT * FROM producto WHERE id_categoria_producto = ".$idcategoria."";
				return $consulta;
		}

		public function detalleProducto($id){
			// Variable
			$this->idProducto = $id;

			// Consulta
			$query = 'select * from tb_producto where idProducto ="'.$this->idProducto.'"';

			// Ejecuto
			$consulta = $this->conexion->query($query);

			while($row = mysqli_fetch_array($consulta)){
				echo '<div class="contDetalle">
						<!-- Contenedor imagen -->
						<div class="contImgDetalle">
							<img src="../../img/imagenesSubidas/imagenesProductos/'.$row['rutaImagen'].'" alt="'.$row['nombreProducto'].'">
						</div>
						<!-- Contenedor de los detalles escritos -->
						<div class="contDetalleTxt">
							<!-- Textos -->
							<input type="hidden" value="'.$row['idProducto'].'" class="idProducto">
							<p class="textosDetalle" id="nombreProducto"><span class="tituloProductoDetalle">'.$row['nombreProducto'].' </span></p>
							<p class="textosDetalle" id="descripcionProducto"><span class="tituloDetalle">Descripcion:</span> '.$row['descripcionProducto'].' </p>
							<p class="textosDetalle" id="valorProductoo"><span class="tituloDetalle">Valor:</span> $'.$row['valorProducto'].'</p>
							<p class="txtAgregar">Elegir cotizacion:</p>';
			}
		}

}
?>
