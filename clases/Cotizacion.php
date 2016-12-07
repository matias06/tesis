<?php
//Llamo a la clase conexion
	require_once('Conexion.php');

//Creo la clase cotizacion
	class Cotizacion extends Conexion{


			// ATRIBUTOS
			private $idCotizacion;
			private $nombreCotizacion;
			private $fechaCreacion;
			private $rutUsuario;


			// Atributos extras para enlazar los productos a las cotizaciones
			private $idProducto;
			private $cantidad;


		/**************************************

				FUNCION LISTAR

		**************************************/
		public function listarCotizacionVistaAdm(){

			/* CONSULTA PARA MOSTRAR TABLA */

			$query = 'select
			idCotizacion,
			nombreCotizacion,
			DATE_FORMAT(fechaCreacion,"%e de %M del %Y a las %H:%i") fechaCreacion,
			nombreUsuario
			from tb_cotizacion
			inner join tb_usuario on tb_usuario.rutUsuario = tb_cotizacion.rutUsuario';

			$this->conexion->query("SET lc_time_names = 'es_CL'");
			// Ejecuto la query
			$consulta = $this->conexion->query($query);

			//Si encontramos datos, mostramos
			while($row = mysqli_fetch_array($consulta)){
				echo '<tr>';
					echo '<td>'.$row['nombreCotizacion'].'</td>';
					echo '<td>'.$row['fechaCreacion'].'</td>';
					echo '<td>'.$row['nombreUsuario'].'</td>';
					echo '<td>
							<i class="fa fa-search buscarTabla" title="Ver Cotizacion" aria-hidden="true" onclick="verCotizacion('.$row['idCotizacion'].');"></i>
							<i class="fa fa-trash eliminarTabla" title="Eliminar Cotizacion" aria-hidden="true" onclick="eliminarCotizacion('.$row['idCotizacion'].');"></i>
						  </td>';
				echo '</tr>';
			}


		}
		/**************************************

				TERMINA FUNCION LISTAR

		**************************************/









		/**************************************

				FUNCION AGREGAR ESTADO

		**************************************/
		public function crearCotizacion($nombre,$rut){

			//SETEA VARIABLES
			$this->nombreCotizacion = $nombre;
			$this->rutUsuario = $rut;

			$consultaDatos = $this->conexion->query('
				select nombreCotizacion
				from tb_cotizacion
				where nombreCotizacion = "'.$this->nombreCotizacion.'"');

			if (mysqli_num_rows($consultaDatos)>0) {
				// Si existe, no se crea, se envia mensaje
				echo "existe";
			} else{
				// Tomo la fecha y hora actual de la creacion
				$date = date('Y-m-d H:i:sa');
				// No existe, se crea
				$this->conexion->query('
					insert into
			 		tb_cotizacion
			 		values(null,
			 		"'.$this->nombreCotizacion.'",
			 		"'.$date.'",
			 		"'.$this->rutUsuario.'")');
			 	// Se envia mensaje
				echo "creado";
			}
		}
		/**************************************

				FUNCION AGREGAR ESTADO

		**************************************/









		/**************************************

				FUNCION EDITAR ESTADO

		**************************************/
		public function editarCotizacion($id, $nombre, $fecha, $rut){

			// Seteo variables
			$this->idCotizacion = $id;
			$this->nombreCotizacion = $nombre;
			$this->fechaCreacion = $fecha;
			$this->rutUsuario = $rut;

			$consultaDatos = $this->conexion->query("
				select idCotizacion
				from tb_cotizacion
				where idCotizacion = '".$this->idCotizacion."'");


			//Existe
			if(mysqli_num_rows($consultaDatos2)>0){
					// Si no existe, se actualiza
					$this->conexion->query("
						update tb_cotizacion set
						nombreCotizacion = '".$this->nombreCotizacion."',
						fechaCreacion = '".$this->fechaCreacion."',
						rutUsuario = '".$this->rutUsuario."'
						where idCotizacion = '".$this->idCotizacion."'");
					// Envio mensaje
					echo 'actualizado';
				}else{
					echo 'noactualizado';
				}
		}
		/**************************************

				FUNCION EDITAR ESTADO

		**************************************/






		/**************************************

				FUNCION ELIMINAR ESTADO

		**************************************/
		public function eliminarCotizacion($id){

				//SETEA VARIABLES
			$this->idCotizacion= $id;
			// Consulto primero si existe algun usuario con ese tipo
			$consultaDatos = $this->conexion->query('
				select idCotizacion
				from tb_cotizacion
				where idCotizacion = "'.$this->idCotizacion.'"');

			if(mysqli_num_rows($consultaDatos)>0){
				// Si no se esta usando, se elimina.
				$this->conexion->query('
					delete from
					tb_cotizacion
					where idCotizacion = "'.$this->idCotizacion.'"');
				$this->conexion->query('
					delete from tb_productocotizacion where idCotizacion = "'.$this->idCotizacion.'"');
				// Envio
				echo 'eliminado';
			}else{
				echo 'noeliminado';
			}
		}
		/**************************************

				FUNCION ELIMINAR ESTADO

		**************************************/













		/**************************************

		FUNCION CONSULTA PARA LLENAR FORMULARIO

		**************************************/
		public function llenarFormulario($id){

			// Seteo variable
			$this->idCotizacion = $rut;

			// Guardo la query
			$query = "select
					  idCotizacion,
					  nombreCotizacion,
					  fechaCreacion,
					  from tb_cotizacion
					  where idCotizacion = '".$this->idCotizacion."'";

			// Ejecuto la query
			$consulta = $this->conexion->query($query);

			//Si encontramos datos, mostramos
			while($row = mysqli_fetch_array($consulta)){
				echo '<form action="#" method="post" class="form">';
					echo '<input id="inputid" type="text" value="'.$row['idCotizacion'].'" disabled>';
					echo '<input id="inputNombre" type="text" placeholder="Nombre" required value="'.$row['nombreCotizacion'].'">';
					echo '<input id="inputFecha" type="text" placeholder="Apellido" required value="'.$row['fechaCreacion'].'">';
					echo '<input id="inputRut" type="text" placeholder="Email" required value="'.$row['idEstadoCotizacion'].'">';
					echo '<input type="button" value="editar" onclick="editarCotizacion();">';
				echo '</form>';

			}
		}
		/**************************************

		FUNCION CONSULTA PARA LLENAR FORMULARIO

		**************************************/







		/**************************************

		FUNCION CONSULTA PARA CREAR COMBO DINAMICO

		**************************************/
		public function llenarComboCotizacion(){
			// Creo la consulta
			$query = 'select idCotizacion, nombreCotizacion
					  from tb_cotizacion';
			// Ejecuto
			$consulta = $this->conexion->query($query);
			// Pregunto si existen datos
			if(mysqli_num_rows($consulta)> 0){
				//Si encontramos datos, mostramos 1 combo, y llenamos segun resultados
				echo '<select class="combos" name="cotizacion" id="comboCotizaciones">';
				while($row = mysqli_fetch_array($consulta)){
					echo '<option value='.$row['idCotizacion'].'>'.$row['nombreCotizacion'].'</option>';
				}
				echo '</select>';
			}else{
				// De no existir datos, muestro un combo por defecto
				echo '<select class="combos" name="cotizacion">';
				echo '<option value="0" selected> -- Primero cree una cotizacion -- </option>';
				echo '</select>';
			}

		}
		/**************************************

		FUNCION CONSULTA PARA CREAR COMBO DINAMICO

		**************************************/








		/**************************************

		FUNCION CONSULTA PARA SABER SI EXISTEN COTIZACIONES ASOCIADAS

		**************************************/
		public function existeCotizacion($rut){

			$this->rutUsuario = $rut;
			// Creo la consulta
			$query = 'select rutUsuario from tb_cotizacion where rutUsuario = "'.$this->rutUsuario.'"';
			// Ejecuto
			$consulta = $this->conexion->query($query);
			// Pregunto si existen datos
			if(mysqli_num_rows($consulta)> 0){
				// El usuario posee cotizaciones, pasa a productos
				echo 'tiene';
			}else{
				// El usuario no posee cotizaciones, debe crear uno
				echo 'notiene';
			}
		}
		/**************************************

		FUNCION CONSULTA PARA SABER SI EXISTEN COTIZACIONES ASOCIADAS

		**************************************/







		/*************************************

		FUNCION PARA AGREGAR PRODUCTOS A LA COTIZACION

		**************************************/
		public function agregarProductosCotizacion($idProduc,$idCoti){

			$this->idProducto = $idProduc;
			$this->idCotizacion = $idCoti;

			// Consulto, si ya existe el producto en la cotizacion
			$query = "select idProducto from tb_productocotizacion where idProducto = '".$this->idProducto."'
					  and idCotizacion = '".$this->idCotizacion."'";

			// Ejecuto
			$consulta = $this->conexion->query($query);

			// Pregunto si existen datos
			if(mysqli_num_rows($consulta)> 0){
				//El producto existe en la cotizacion
				echo 'existe';
			}else{
				// No existe en la cotizacion, se agrega a la misma
				$this->conexion->query('
					insert into tb_productocotizacion values(
					null,
					"'.$this->idProducto.'",
					"'.$this->idCotizacion.'",
					1)');
				echo 'agregado';
			}
		}
		/*************************************

		FUNCION PARA AGREGAR PRODUCTOS A LA COTIZACION

		**************************************/










		/*************************************

		FUNCION PARA CARGAR PRODUCTOS DE LA COTIZACION Y MOSTRARLOS AL DETALLE

		**************************************/
		public function verCotizacionDetalle($idCoti){
			$this->idCotizacion = $idCoti;

			// Consulto
			$query = 'select tb_productocotizacion.idProductoCotizacion,
						tb_productocotizacion.idProducto,
						tb_productocotizacion.idCotizacion,
						tb_producto.rutaImagen,
						tb_producto.nombreProducto,
						concat("$", format((tb_producto.valorProducto),0,2)) as valorProducto,
						tb_cotizacion.nombreCotizacion,
						DATE_FORMAT(fechaCreacion,"%e de %M del %Y a las %H:%i")fechaCreacion,
						tb_productocotizacion.cantidad,
						concat("$",format((tb_productocotizacion.cantidad * tb_producto.valorProducto),0,2)) as subtotal
						from tb_productocotizacion
						inner join tb_cotizacion on tb_cotizacion.idCotizacion = tb_productocotizacion.idCotizacion
						inner join tb_producto on tb_producto.idProducto = tb_productocotizacion.idProducto
					where tb_productocotizacion.idCotizacion ="'.$this->idCotizacion.'"';

			$this->conexion->query("SET lc_time_names = 'es_CL'");
			// Ejecuto
			$consulta = $this->conexion->query($query);

			// Pregunto si existen datos
			// SE MUESTRA CABECERA
			if(mysqli_num_rows($consulta)> 0){
				$row = mysqli_fetch_array($consulta,MYSQLI_NUM);
				$nombreCotizacion = $row[6];
				$fechaCreacion = $row[7];
				echo '<!-- Contenedor detalle cotizacion -->
						<div class="contDetalleCotizacion" id="pdf">
						<h1 class="nombreCotizacion">'.$nombreCotizacion.'</h1>
						<span class="fechaCreacion"><b>Creada el dia:</b> '.$fechaCreacion.'</span>
							<!-- Creo tabla -->
							<table class="tablaDetalleCotizacion">
							                    <thead class="theadDetalle">
							                        <tr class="trDetalle">
							                            <th>Imagen</th>
							                            <th>Nombre del Producto</th>
							                            <th>Valor Unitario</th>
							                            <th>Cantidad</th>
							                            <th>SubTotal</th>
							                            <th>Acciones</th>
							                        </tr>
							                    </thead>
			                    <tbody class="tbodyDetalle">';
			    mysqli_data_seek($consulta,0);
			    // SE MUESTRAN PRODUCTOS ASOCIADOS A ESA COTIZACION
				while($row2 = mysqli_fetch_array($consulta)){
					// Identifico la fila del producto
					echo '<tr class="filaProducto">
			              	<td class="tdDetalle">
					            <div class="contProducto">
									<img src="../../img/imagenesSubidas/imagenesProductos/'.$row2['rutaImagen'].'" alt="'.$row2['nombreProducto'].'"/>
								</div>
			               	</td>
			                <td class="tdDetalle">'.$row2['nombreProducto'].'</td>
			                <td class="tdDetalle">
			                	<span class="valor">'.$row2['valorProducto'].'</span>
			                </td>
			                <td class="tdDetalle">
			                   <span class="cantidad">'.$row2['cantidad'].'</span>
			                </td>
			                <td class="tdDetalle"><span class="subTotal">'.$row2['subtotal'].'</span></td>
			                <td class="tdDetalle">
			                	<!-- Boton para agregar cantidad -->
			                	<i class="fa fa-plus agregarTabla" aria-hidden="true" title="Agregar Cantidad" onclick="modificarCantidad('.$row2['idCotizacion'].','.$row2['idProducto'].');"></i>
								<!-- Boton para eliminar producto de la cotizacion -->
			                	<i class="fa fa-trash eliminarTabla" aria-hidden="true" title="Eliminar Producto" class="eliminarProductoCotizacion" onclick="eliminarProductoCotizacion('.$row2['idProductoCotizacion'].');"></i>
				            </td>
			                </tr>';
				}
				// SE CIERRA Y TERMINA LA TABLA CON BOTONES
				echo '</tbody>
					</table>';
			}else{
				// Nada que mostrar
				echo '<p class="nohayproductos">No existen productos en la cotizacion</p>
					  <button class="iraProductos" onclick="irAProductos();">Agregar Productos</button>';
			}

		}
		/*************************************

		FUNCION PARA CARGAR PRODUCTOS DE LA COTIZACION Y MOSTRARLOS AL DETALLE

		**************************************/









		/*************************************

		FUNCION PARA ELIMINAR PRODUCTO DE LA COTIZACION

		**************************************/
		public function eliminarProductoCotizacion($idProduc){
			$this->idProducto = $idProduc;

			// Consulto primero si existe algun usuario con ese tipo
			$consultaDatos = $this->conexion->query('
				select tb_productocotizacion.idProductoCotizacion
				from tb_productocotizacion
				where tb_productocotizacion.idProductoCotizacion = "'.$this->idProducto.'"');

			if(mysqli_num_rows($consultaDatos)>0){
				$this->conexion->query('
					delete from tb_productocotizacion
					where idProductoCotizacion = "'.$this->idProducto.'"');
				// Envio
				echo 'eliminado';
			}else{
				echo 'noeliminado';
			}

		}
		/*************************************

		FUNCION PARA ELIMINAR PRODUCTO DE LA COTIZACION

		**************************************/








		/*************************************

		FUNCION PARA CAMBIAR LA CANTIDAD DE PRODUCTOS

		**************************************/
		public function editarCantidadProductos($idCoti,$idProdu,$cant){
			$this->idCotizacion = $idCoti;
			$this->idProducto = $idProdu;
			$this->cantidad = $cant;

			$consultaDatos = $this->conexion->query("
				select tb_productocotizacion.cantidad
				from tb_productocotizacion
				where idProducto = '".$this->idProducto."' and idCotizacion = '".$this->idCotizacion."'");


			//Existe
			if(mysqli_num_rows($consultaDatos)>0){
					// Si no existe, se actualiza
					$this->conexion->query("
						update tb_productocotizacion
						set cantidad = '".$this->cantidad."'
						where idProducto = '".$this->idProducto."'
						and idCotizacion = '".$this->idCotizacion."'");
					// Envio mensaje
					echo 'actualizado';
				}else{
					echo 'noactualizado';
				}



		}
		/*************************************

		FUNCION PARA CAMBIAR LA CANTIDAD DE PRODUCTOS

		**************************************/





		/*************************************

		FUNCION PARA OBTENER EL TOTAL TOTAL

		**************************************/
		public function obtenerTOTAL($idCoti){
			$this->idCotizacion = $idCoti;

			$resultado = $this->conexion->query('
				select format(sum(tb_producto.valorProducto * tb_productocotizacion.cantidad),0,2) as TOTAL
				from tb_productocotizacion
				inner join tb_producto on tb_producto.idProducto = tb_productocotizacion.idProducto
				where tb_productocotizacion.idCotizacion = "'.$this->idCotizacion.'"');

			if(mysqli_num_rows($resultado)>0){
				$row = mysqli_fetch_array($resultado,MYSQLI_NUM);

				echo '<!-- Termina tabla -->
    				 <span class="totalCotizacion">TOTAL: $<b class="resultadoTotal">'.$row[0].'</b></span>';
			}else{
				echo '<span class="totalCotizacion">TOTAL: $<b class="resultadoTotal">0</b></span>';
			}
		}
		/*************************************

		FUNCION PARA OBTENER EL TOTAL TOTAL

		**************************************/

}
?>
