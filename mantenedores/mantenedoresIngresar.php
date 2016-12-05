<?php

    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
require_once '../clases/usuario.php';
	switch($_REQUEST['mant']){
            case "1": //echo " Mantenedor usuario";
						switch($_REQUEST['func']){

								case "1": //echo "se ingresa";

									$usuario=new Usuario();

                                    $rut = filter_var($_REQUEST['txt_run'], FILTER_SANITIZE_STRING);
									$usuario->setrun($rut);
                                    $nombre = filter_var($_REQUEST['txt_nombre'], FILTER_SANITIZE_STRING);
									$usuario->setnombre($nombre);
                                    $apellido = filter_var($_REQUEST['txt_apellido'], FILTER_SANITIZE_STRING);
									$usuario->setapellido($apellido);
                                    $contraseña = filter_var($_REQUEST['txt_password'], FILTER_SANITIZE_STRING);
									$usuario->setpassword($contraseña);
                                    $telefono = filter_var($_REQUEST['txt_telefono'], FILTER_SANITIZE_NUMBER_INT);
                  $usuario->settelefono($telefono);
                                    $contraseña = filter_var($_REQUEST['txt_correo'], FILTER_SANITIZE_STRING);
                  $usuario->setcorreo($contraseña);


									$usuario->settipo_usuario($_REQUEST['tipousuario']);
									$usuario->setestado_usuario($_REQUEST['estadousuario']);

									$usuario->insertarUsuario();

								break;

								case "2": //echo "SE MODIFICA";
								$usuario=new Usuario();

                                    $rutModifcar = filter_var($_REQUEST['txt_run_modificar'], FILTER_SANITIZE_STRING);
									$usuario->setrun($rutModifcar);
                                    $nombreModificar = filter_var($_REQUEST['txt_nombre_modificar'], FILTER_SANITIZE_STRING);
									$usuario->setnombre($nombreModificar);
                                    $apellidoModifcar = filter_var($_REQUEST['txt_apellido_modificar'], FILTER_SANITIZE_STRING);
									$usuario->setapellido($apellidoModifcar);
                                    $contraseñaModifcar = filter_var($_REQUEST['txt_contraseña_modificar'], FILTER_SANITIZE_STRING);
									$usuario->setpassword($contraseñaModifcar);

                                    $telefonoModificar = filter_var($_REQUEST['txt_telefono_modificar'], FILTER_SANITIZE_NUMBER_INT);
                  $usuario->settelefono($telefonoModificar);

                                    $correoModifcar = filter_var($_REQUEST['txt_correo_modificar'], FILTER_SANITIZE_STRING);
                  $usuario->setcorreo($correoModifcar);

									$usuario->settipo_usuario($_REQUEST['cmb_tipo_modificar']);
									$usuario->setestado_usuario($_REQUEST['cmb_estado_modificar']);

									$usuario->insertarUsuario();

								break;
								case "3": //echo "SE ELIMINA";
									$usuario=new Usuario();

									$usuario->setrun($_REQUEST['id']);

									$usuario->eliminarUsuario();


									break;

								case "4":
								?>
 				<!-- tabla -->

 						<div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed" id="fondo">
                                        <thead class="active danger tablaHead">
                                            <th>Run</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Contraseña</th>
                                            <th>Télefono</th>
                                            <th>Correo</th>
                                            <th>Tipo usuario</th>
                                            <th>Estado usuario</th>
                                            <th>Eliminar Editar </th>
                                        </thead>

                                        <?php
                                            $usuario = new Usuario();
                                            $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                            $filas = $usuario->BuscarFiltarRegistros("vistausuario","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);



                                            $contador=0;
                                        foreach($filas[0][0] as $user){
                                                    $contador++;

                                        echo'
                                        <div class="container">
                                        <tr class="tablaFilas">
                                            <td><span id="txt_run'.$contador.'">'.$user['run'].'</span></td>
                                            <td><span id="txt_nombre'.$contador.'">'.$user['nombre'].'</span></td>
                                            <td><span id="txt_apellido'.$contador.'">'.$user['apellido'].'</span></td>
                                            <td><span id="txt_password'.$contador.'">'.$user['password'].'</span></td>
                                            <td><span id="txt_telefono'.$contador.'">'.$user['telefono'].'</span></td>
                                            <td><span id="txt_correo'.$contador.'">'.$user['correo'].'</span></td>

                                            <td><span class="hidden" id="txt_descripcionTipo1'.$contador.'">'.$user['id_tipo_usuario'].'</span>
                                            <span id="txt_descripcionTipo'.$contador.'">'.$user['descripcion_tipo_usuario'].'</span></td>

                                            <td><span class="hidden" id="txt_descripcion_Estado1'.$contador.'">'.$user['id_estado_usuario'].'</span>
                                            <span id="txt_estadoTipo'.$contador.'">'.$user['descripcion_estado_usuario'].'</span></td>


                                            <!--  botones editar -->
                                            <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificar" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                            <!--  botones eliminar -->
                                            <button type="button" class="btn btn-danger bottonEliminar" onclick="eliminarUsuario(\''.$user['run'].'\');" aria-label="left aling">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                        </tr>
                                        </div>';

                                         } ?>
										    <tr>
                                              <td colspan="7">
                                                <center>
                                                <?php
                                                  echo $filas[0][1];
                                                ?>
                                              </center>
                                              </td>
                                            </tr>
                                </table>
                            </div>
                                 <?php
								break;
                case "5":
								?>
 				<!-- tabla -->

 						<div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed" id="fondo">
                                        <thead class="active danger tablaHead">
                                            <th>Run</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Tipo usuario</th>

                                        </thead>

                                        <?php
                                            $usuario = new Usuario();
                                            $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                            $filas = $usuario->BuscarFiltarRegistros("vistaclientes","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);



                                            $contador=0;
                                        foreach($filas[0][0] as $user){
                                                    $contador++;

                                        echo'
                                        <div class="container">
                                        <tr class="tablaFilas">
                                            <td><span id="txt_run'.$contador.'">'.$user['run'].'</span></td>
                                            <td><span id="txt_nombre'.$contador.'">'.$user['nombre'].'</span></td>
                                            <td><span id="txt_apellido'.$contador.'">'.$user['apellido'].'</span></td>

                                            <td><span class="hidden" id="txt_descripcionTipo1'.$contador.'">'.$user['id_tipo_usuario'].'</span>
                                            <span id="txt_descripcionTipo'.$contador.'">'.$user['descripcion_tipo_usuario'].'</span></td>


                                        </div>';

                                         } ?>
										    <tr>
                                              <td colspan="7">
                                                <center>
                                                <?php
                                                  echo $filas[0][1];
                                                ?>
                                              </center>
                                              </td>
                                            </tr>
                                </table>
                            </div>
                                 <?php
								break;
						}
			break;

			case "2": //echo " Mantenedor producto";

			require_once'../clases/claseProductos.php';

			$productos=new Productos();
			switch($_REQUEST['prod']){

								case "1": //echo "se ingresa";

                        $codigo = filter_var($_REQUEST['txt_id_producto'], FILTER_SANITIZE_NUMBER_INT);
                            $productos->setid_producto($codigo);

                            $descripcion = filter_var($_REQUEST['txt_descripcion'], FILTER_SANITIZE_STRING);
                            $productos->setdescripcion_producto($descripcion);

                            $valor = filter_var($_REQUEST['txt_valor'], FILTER_SANITIZE_NUMBER_INT);
                            $productos->setvalor_producto($valor);

                            // $imagen = filter_var($_REQUEST['txt_imagen'], FILTER_SANITIZE_STRING);
                            //$productos->setimagen($imagen);

                            $productos->setrut($_REQUEST['cmb_proveedores']);

                            $productos->setestado_producto($_REQUEST['cmb_estado_producto']);
                            $productos->setcategoria_producto($_REQUEST['cmb_categoria_producto']);



                            $img = $_FILES['txt_imagen'];
                                      $nombreImg = $img['name'];
                                      $tipoImg = $img['type'];
                                      $rutaPrevisional = $img['tmp_name'];
                                      $size = $img['size'];
                                      $dimensiones = getimagesize($rutaPrevisional);
                                      $width = $dimensiones[0];
                                      $height = $dimensiones[1];
                                      $carpeta = "../imagenes/productos";


                                      if($tipoImg != 'image/jpeg' && $tipoImg != 'image/jpeg' && $tipoImg != 'image/png'){
                                          echo "El Archivo a subir no es una imagen";
                                      }else if($size > 1024*1024){
                                          echo "Tamaño de imagen muy grande";
                                      }else if($width > 5000 || $height > 5000){
                                          echo "La anchura y altura maxima para la imagen es 5000px";
                                      }else if($width < 60 || $height < 60){
                                          echo "La anchura y altura minima para la imagen es de 60px";
                                      }else{
                                          //consulta
                                         // $resultado = $portada->actualizarPortada($id, $titulo, $src, $contenido);

                                             // $file_upload_to= SITE_ROOT . DS . $carpeta;
                                              move_uploaded_file($rutaPrevisional, $carpeta."/". $nombreImg);

                                              $productos->setimagen($nombreImg);

                                }

                            $productos->insertarProductos();

								break;

								case "2": //echo "SE MODIFICA";
								$producto = new Productos();

									$productos->setid_producto($_REQUEST['txt_id_producto_modificar']);
                                    $descripcionModificar = filter_var($_REQUEST['txt_descripcion_modificar'], FILTER_SANITIZE_STRING);

									$productos->setdescripcion_producto($descripcionModificar);
                                    $valorModificar = filter_var($_REQUEST['txt_valor_modificar'], FILTER_SANITIZE_NUMBER_INT);

									$productos->setvalor_producto($valorModificar);
                                    $imagenModificar = filter_var($_REQUEST['txt_imagen_modificar'], FILTER_SANITIZE_STRING);

									$productos->setimagen($imagenModificar);

                                    $proveedorModificar = filter_var($_REQUEST['txt_proveedor_modificar'], FILTER_SANITIZE_STRING);
									$productos->setrut($proveedorModificar);

									$productos->setestado_producto($_REQUEST['cmb_estado_producto_modificar']);
									$productos->setcategoria_producto($_REQUEST['cmb_categoria_producto_modificar']);

									if($productos->modificarProductos()==true){
										echo "2";
									}

								break;

								case "3": //echo "SE ELIMINA";
									$productos = new Productos();

									$productos->setid_producto($_REQUEST['idProd']);
									$productos->setestado_producto("2");


									$productos->eliminarProductos();

      //                 if($verificarExito==true){
      //                       echo "2";
      //                 }

								case "4":
								?>
 				<!-- tabla -->

 						<div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed" id="fondo">
                                          <thead class="active danger tablaHead">

                                            <th>Codigo</th>
                                            <th>Descripción</th>
                                            <th>Valor</th>
                                            <th>Rut</th>
                                            <th>Estado producto</th>
                                            <th>Categoría producto</th>
                                            <th>Eliminar Editar </th>
                                        </thead>

                                        <?php
                                            $producto = new Productos();

          $filas = $producto->BuscarFiltarRegistros("vistaproducto","campoBuscar",$_REQUEST['buscar'],$_REQUEST['pag'],$_REQUEST['cantidadReg']);


                                        $contador=0;
                                        foreach($filas[0][0] as $user){
                                        $contador++;

                                        echo'
                                        <div class="container">
                                        <tr class="tablaFilas">

                                          <td><span id="txt_id_producto'.$contador.'">'.$user['id_producto'].'</span></td>
                                            <td><span id="txt_descripcion'.$contador.'">'.$user['descripcion_producto'].'</span></td>
                                            <td><span id="txt_valor'.$contador.'">'.$user['valor_producto'].'</span></td>
                                            <span class="hidden" id="txt_imagen'.$contador.'">'.$user['imagen'].'</span>


                                            <!-- combobox -->
                                            <td><span class="hidden" id="txt_proveedor'.$contador.'">'.$user['rut'].'</span>
                                            <span id="cmb_proveedor1'.$contador.'">'.$user['razon_social'].'</span></td>

                                            <td><span class="hidden" id="cmb_id_estado_producto'.$contador.'">'.$user['id_estado_producto'].'</span>
                                            <span id="cmb_estado_producto'.$contador.'">'.$user['descripcion_estado_producto'].'</span></td>

                                            <td><span class="hidden" id="cmb_id_categoria_producto'.$contador.'">'.$user['id_categoria_producto'].'</span>
                                            <span id="cmb_categoria_producto'.$contador.'">'.$user['descripcion_categoria_producto'].'</span></td>



                                            <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificar" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>

                                          <button type="button" class="btn btn-danger" onclick="eliminarProductos(\''.$user['id_producto'].'\');" aria-label="left aling">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                            </tr>
                                        </div>';

                                        } ?>
										    <tr>
                                              <td colspan="7">
                                                <center>
                                                <?php
                                                  echo $filas[0][1];
                                                ?>
                                              </center>
                                              </td>
                                            </tr>
                                </table>
                            </div>
                                 <?php
								break;

                //Stock productos
                case "5":
                ?>

                <table class="table table-bordered table-hover table-condensed" id="tablaStock" id="fondo">
                        <thead class="active danger tablaHead">
                            <th>Código producto</th>
                            <th>Producto</th>
                            <th>Valor</th>
                            <th>Estado producto</th>
                            <th>Stock</th>

                        </thead>
                        <tbody>
                        <?php

                        // $productos->setStock($_REQUEST['stock']);
                        $filas= $productos->listarStock();

                        foreach($filas as $columnas){

                     ?>
                        <tr>
                          <td><?php echo $columnas['id_producto'];  ?></td>
                          <td><?php echo $columnas['descripcion_producto'];  ?></td>
                          <td><?php echo $columnas['valor_producto'];  ?></td>
                          <td><?php echo $columnas['id_estado_producto'];  ?></td>
                          <td><?php echo $columnas['stock'];  ?></td>

                <?php      } ?>
                  </tbody>
                </table>
  <?php



						}
			break;

			case "3": //echo " Mantenedor proveedor";

				         require_once'../clases/claseProveedor.php';
			             switch($_REQUEST['prov']){

								case "1": //echo " se ingresa";


									$proveedor = new Proveedor();

                                    $rutProv = filter_var($_REQUEST['txt_rut'], FILTER_SANITIZE_STRING);
									$proveedor->setrut($rutProv);
                                    $razonSocial = filter_var($_REQUEST['txt_razon_social'], FILTER_SANITIZE_STRING);
									$proveedor->setrazon_social($razonSocial);
                                    $direccion = filter_var($_REQUEST['txt_direccion'], FILTER_SANITIZE_STRING);
									$proveedor->setdireccion_proveedor($direccion);
                                    $telefono = filter_var($_REQUEST['txt_telefono'], FILTER_SANITIZE_NUMBER_INT);
									$proveedor->settelefono($telefono);
                                    $correo = filter_var($_REQUEST['txt_correo'], FILTER_SANITIZE_STRING);
									$proveedor->setcorreo($correo);
									$proveedor->setid_estado($_REQUEST['cmb_estado']);
									$proveedor->insertarProveedor();

								break;

								case "2": //echo "SE MODIFICA";
								$proveedor = new Proveedor();

                                    $rutProvMod = filter_var($_REQUEST['txt_rut_modificar'], FILTER_SANITIZE_STRING);
									$proveedor->setrut($rutProvMod);
                                    $razonSocialMod = filter_var($_REQUEST['txt_razon_social_modificar'], FILTER_SANITIZE_STRING);
									$proveedor->setrazon_social($razonSocialMod);
                                    $direccionMod = filter_var($_REQUEST['txt_direccion_modificar'], FILTER_SANITIZE_STRING);
									$proveedor->setdireccion_proveedor($direccionMod);
                                    $telefonoMod = filter_var($_REQUEST['txt_telefono_modificar'], FILTER_SANITIZE_STRING);
									$proveedor->settelefono($telefonoMod);
                                    $correoMod = filter_var($_REQUEST['txt_correo_modificar'], FILTER_SANITIZE_STRING);
									$proveedor->setcorreo($correoMod);
									$proveedor->setid_estado($_REQUEST['cmb_estado_modificar']);
									$proveedor->actualizarProveedor();

								break;
								case "3": //echo "SE ELIMINA";
								$proveedor = new Proveedor();

                                    $proveedor->setrut($_REQUEST['id']);
                                    $proveedor->setid_estado("4");


                                    $proveedor->eliminarProveedor();

								case "4": //PAGINADOR
								?>
									<div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed tablaGeneral" id="fondo">
                                        <thead class="active danger tablaHead">

                                            <th>Razón Social</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                            <th>Eliminar Editar </th>
                                        </thead>


                                        <?php

                                            $proveedor = new Proveedor();
                                            $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
            $filas = $proveedor->BuscarFiltarRegistros("vistaproveedor","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                        $contador=0;
                                        foreach($filas[0][0] as $user){
                                        $contador++;

                                    echo'
                                    <div class="container">
                                        <tr class="tablaFilas">
                                            <span class="hidden" id="txt_rut'.$contador.'">'.$user['rut'].'</span>
                                            <td><span id="txt_razon_social'.$contador.'">'.$user['razon_social'].'</span></td>
                                            <td><span id="txt_direccion'.$contador.'">'.$user['direccion_proveedor'].'</span></td>
                                            <td><span id="txt_telefono'.$contador.'">'.$user['telefono'].'</span></td>
                                            <td><span id="txt_correo'.$contador.'">'.$user['correo'].'</span></td>

                                            <td><span class="hidden" id="id_estado'.$contador.'">'.$user['id_estado'].'</span>
                                            <span id="cmb_estado_modificar'.$contador.'">'.$user['descripcion_estado'].'</span></td>


                                            <!--  botones editar -->
                                            <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificar" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                            <!--  botones eliminar -->
                                            <button type="button" class="btn btn-danger" onclick="eliminarProveedor(\''.$user['rut'].'\');" aria-label="left aling">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                        </tr>
                                        </div>';
                                          } ?>
                                            <tr>
                                              <td colspan="7">
                                                <center>
                                                <?php
                                                  echo $filas[0][1];
                                                ?>
                                              </center>
                                              </td>
                                            </tr>
                                </table>
                            </div>
                                 <?php
                                break;
                case "5": //PAGINADOR
                ?>
                  <div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed tablaGeneral">
                                        <thead class="active danger tablaHead">
                                            <th>Razón Social</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Estado</th>
                                            <th>Eliminar Editar </th>
                                        </thead>


                                        <?php

                                            $proveedor = new Proveedor();
                                            $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
            $filas = $proveedor->BuscarFiltarRegistros("vistaproveedor","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                        $contador=0;
                                        foreach($filas[0][0] as $user){
                                        $contador++;

                                    echo'
                                    <div class="container">
                                        <tr class="tablaFilas">
                                            <span class="hidden" id="txt_rut'.$contador.'">'.$user['rut'].'</span>
                                            <td><span id="txt_razon_social'.$contador.'">'.$user['razon_social'].'</span></td>
                                            <td><span id="txt_direccion'.$contador.'">'.$user['direccion_proveedor'].'</span></td>
                                            <td><span id="txt_telefono'.$contador.'">'.$user['telefono'].'</span></td>
                                            <td><span id="txt_correo'.$contador.'">'.$user['correo'].'</span></td>

                                            <td><span class="hidden" id="id_estado'.$contador.'">'.$user['id_estado'].'</span>
                                            <span id="cmb_estado_modificar'.$contador.'">'.$user['descripcion_estado'].'</span></td>


                                            <!--  botones e-mail -->
                                            <td><button type="button" onclick="" data-toggle="modal" data-target="#modificar" class="btn btn-warning">
                                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>


                                        </tr>
                                        </div>';
                                          } ?>
                                            <tr>
                                              <td colspan="7">
                                                <center>
                                                <?php
                                                  echo $filas[0][1];
                                                ?>
                                              </center>
                                              </td>
                                            </tr>
                                </table>
                            </div>
                                 <?php
                                break;
        }
            break;

			case "4": echo " Mantenedor Categoria Trabajo";
				        require_once'../clases/claseCategoriaTrabajo.php';

			            switch($_REQUEST['catTrab']){

								case "1": //echo " SE INGRESA";

									$categoriaTrabajo = new CategoriaTrabajo();
                  $descripCattrab = filter_var($_REQUEST['txt_descripcion_categoria'], FILTER_SANITIZE_STRING);
									$categoriaTrabajo->setdescripcion_categoria_trabajo($descripCattrab);

                  $categoriaTrabajo->insertarCatTrabajos();

								break;

								case "2": //echo "SE MODIFICA";
								  $CategoriaTrabajo = new CategoriaTrabajo();

                  $descripCattrabMod = filter_var($_REQUEST['txt_rut_modificar'], FILTER_SANITIZE_STRING);
									$CategoriaTrabajo->setid_categoria_trabajo($descripCattrabMod);

                  $razon_socialMod = filter_var($_REQUEST['txt_razon_social_modificar'], FILTER_SANITIZE_STRING);
									$CategoriaTrabajo->setdescripcion_categoria_trabajo($razon_socialMod);

									$CategoriaTrabajo->actualizarProveedores();

								break;
								case "3": //echo "SE ELIMINA";
									// $categoriaTrabajo = new CategoriaTrabajo();

									// $categoriaTrabajo->id_categoria_trabajo($_REQUEST['id']);

									// $categoriaTrabajo->eliminarProductos();

								 try{
                                        if($_REQUEST){
                                          $categoriaTrabajo = $_REQUEST['id'];
                                          $catTrab = new CategoriaTrabajo();
                                          $catTrab->setid_categoria_trabajo($id_categoria_trabajo);
                                          $catTrab->eliminarCatTrabajo();
                                        }
                                    }catch(Exception $e){
                                        echo 'Excepción Capturada',$e->getMessage(),'\n';
                                    }
						          break;
						}
            break;


            case "5":
                        require_once'../clases/claseRegion.php';
                        switch($_REQUEST['func']){
                            case "1": //echo "se ingresa";

                                                $reg=new Region();

                                                $regNombre = filter_var($_REQUEST['txt_region'], FILTER_SANITIZE_STRING);
                                                $reg->setnombreRegion($regNombre);

                                                $reg->insertarRegion();

                                            break;

                            case "2": //echo "SE MODIFICA";
                                            $reg=new Region();
                                            $reg->setidRegion($_REQUEST['txt_idregion_modificar']);

                                            $regNombreMod($_REQUEST['txt_nombreRegion_modificar'], FILTER_SANITIZE_STRING);
                                            $reg->setnombreRegion($regNombreMod);

                                            $reg->insertarRegion();

                                            break;
                            case "3": //echo "SE ELIMINA";
                                                $reg=new Region();

                                                $reg->setidRegion($_REQUEST['id']);

                                                $reg->eliminarRegion();


                                                break;

                            case "4":
                                                 ?>


                                             <!-- tabla -->

                                             <div class="table-responsive">


                                            <table class="table table-bordered table-hover table-condensed" id="tablaRegion">
                                                    <thead class="active danger tablaHead">
                                                        <th>Numero Región</th>
                                                        <th>Nombre Región</th>

                                                        <th>Editar Eliminar </th>
                                                    </thead>
                                                    <?php
                                                        require_once'../clases/claseRegion.php';
                                                        $region = new Region();
                                                        $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                                        $filas = $region->BuscarFiltarRegistros("vistaregion","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                                        $contador=0;

                                                        foreach($filas[0][0] as $reg){
                                                                $contador++;

                                                    echo'
                                                    <tr class="tablaFilas">
                                                        <td><span id="txt_idregion'.$contador.'">'.$reg['id_region'].'</span></td>
                                                        <td><span id="txt_region'.$contador.'">'.$reg['nombre_region'].'</span></td>

                                                        <!--  botones editar -->
                                                        <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarRegion" class="btn btn-warning">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                                        <!--  botones eliminar -->
                                                        <button type="button" class="btn btn-danger" onclick="eliminarRegion(\''.$reg['id_region'].'\');" aria-label="left aling">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                                    </tr>';
                                                     } ?>
                                                     <tr>
                                                         <td colspan="7">
                                                             <center>
                                                                <?php
                                                                    echo $filas[0][1];
                                                                 ?>
                                                             </center>
                                                         </td>
                                                     </tr>
                                            </table>
                                            </div>
                                             <?php
                                            break;
                            }
            break;

            case "6":
                        require_once'../clases/claseCiudad.php';
                        switch($_REQUEST['func']){
                            case "1": //echo "se ingresa";

                                                $city=new Ciudad();
                                                $nombreCiudad = filter_var($_REQUEST['txt_ciudad'], FILTER_SANITIZE_STRING);
                                                $city->setnombreCiudad($nombreCiudad);
                                                $idregion = filter_var($_REQUEST['region'], FILTER_SANITIZE_NUMBER_INT);
                                                $city->setidRegion($idregion);
                                                if($city->insertarCiudad()){
                                                    echo"1";
                                                }else{
                                                    echo"2";
                                                }

                                            break;

                            case "2": //echo "SE MODIFICA";
                                            $city=new Ciudad();

                                            $city->setidCiudad($_REQUEST['txt_idciudad_modificar']);

                                            $nombreciudad = filter_var($_REQUEST['txt_nombreCiudad_modificar'], FILTER_SANITIZE_STRING);
                                            $city->setnombreCiudad($nombreciudad);

                                            $idregion = filter_var($_REQUEST['cmb_region_modificar'], FILTER_SANITIZE_NUMBER_INT);
                                            $city->setidRegion($idregion);

                                            echo"idcity:".$_REQUEST['txt_idciudad_modificar'];
                                            echo"nombrecity:".$_REQUEST['txt_nombreCiudad_modificar'];
                                            echo"idregion:".$_REQUEST['cmb_region_modificar'];
                                            $city->insertarCiudad();

                                            break;
                            case "3": //echo "SE ELIMINA";
                                                $city=new Ciudad();

                                                $city->setidCiudad($_REQUEST['id']);

                                                $city->eliminarCiudad();


                                                break;

                            case "4":
                                                 ?>


                                             <!-- tabla -->

                                             <div class="table-responsive">


                                            <table class="table table-bordered table-hover table-condensed" id="tablaCiudad">
                                                    <thead class="active danger tablaHead">
                                                        <th>Ciudad</th>
                                                        <th>Region</th>

                                                        <th>Editar Eliminar </th>
                                                    </thead>
                                                    <?php
                                                        require_once'../clases/claseCiudad.php';
                                                        $ciu = new Ciudad();
                                                        $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                                        $filas = $ciu->BuscarFiltarRegistros("vistaciudad","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                                        $contador=0;

                                                        foreach($filas[0][0] as $ciudades){
                                                                $contador++;

                                                    echo'
                                                    <tr class="tablaFilas">


                                                        <td><span class="hidden" id="txt_idciudad'.$contador.'">'.$ciudades['id_ciudad'].'</span>
                                                        <span id="txt_nombreCiudad'.$contador.'">'.$ciudades['nombre_ciudad'].'</span></td>
                                                        <td><span class="hidden" id="txt_idregion'.$contador.'">'.$ciudades['id_region'].'</span>
                                                        <span id="txt_nombreRegion'.$contador.'">'.$ciudades['nombre_region'].'</span></td>

                                                        <!--  botones editar -->
                                                        <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarCiudad" class="btn btn-warning">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                                        <!--  botones eliminar -->
                                                        <button type="button" class="btn btn-danger" onclick="eliminarCiudad(\''.$ciudades['id_ciudad'].'\');" aria-label="left aling">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                                    </tr>';
                                                     } ?>
                                                     <tr>
                                                         <td colspan="7">
                                                             <center>
                                                                <?php
                                                                    echo $filas[0][1];
                                                                 ?>
                                                             </center>
                                                         </td>
                                                     </tr>
                                            </table>
                                            </div>
                                             <?php
                                            break;
                            }
            break;

            case "7" :
                        require_once'../clases/claseServicio.php';
                        switch($_REQUEST['func']){
                            case "1": //echo "se ingresa";

                                                $serv=new Servicio();

                                                $serv->setdescripcionServicio($_REQUEST['txt_descripcionServicio']);

                                                $serv->insertarServicio();

                                            break;

                            case "2": //echo "SE MODIFICA";
                                            $serv=new Servicio();
                                            $serv->setidServicio($_REQUEST['txt_idServicio_modificar']);
                                            $serv->setdescripcionServicio($_REQUEST['txt_descripcionServicio_modificar']);
                                            $serv->insertarServicio();

                                            break;
                            case "3": //echo "SE ELIMINA";
                                                $serv=new Servicio();

                                                $serv->setidServicio($_REQUEST['id']);

                                                $serv->eliminarServicio();


                                                break;

                            case "4":
                                                 ?>


                                             <!-- tabla -->

                                             <div class="table-responsive">


                                            <table class="table table-bordered table-hover table-condensed" id="tablaServicio">
                                                    <thead class="active danger tablaHead">
                                                        <th>Numero Servicio</th>
                                                        <th>Servicio</th>

                                                        <th>Editar Eliminar </th>
                                                    </thead>
                                                    <?php
                                                        require_once'../clases/claseServicio.php';
                                                        $servicio = new Servicio();
                                                        $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                                        $filas = $servicio->BuscarFiltarRegistros("servicio","descripcion_servicio",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                                        $contador=0;

                                                        foreach($filas[0][0] as $servicio){
                                                                $contador++;

                                                    echo'
                                                    <tr class="tablaFilas">
                                                        <td><span id="txt_idServicio'.$contador.'">'.$servicio['id_servicio'].'</span></td>
                                                        <td><span id="txt_descripcionServicio'.$contador.'">'.$servicio['descripcion_servicio'].'</span></td>

                                                        <!--  botones editar -->
                                                        <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarServicio" class="btn btn-warning">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                                        <!--  botones eliminar -->
                                                        <button type="button" class="btn btn-danger" onclick="eliminarServicio(\''.$servicio['id_servicio'].'\');" aria-label="left aling">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                                    </tr>';
                                                     } ?>
                                                     <tr>
                                                         <td colspan="7">
                                                             <center>
                                                                <?php
                                                                    echo $filas[0][1];
                                                                 ?>
                                                             </center>
                                                         </td>
                                                     </tr>
                                            </table>
                                            </div>
                                             <?php
                                            break;
                            }
            break;

            case "8":
                        require_once'../clases/claseTrabajos.php';
                        switch($_REQUEST['func']){
                            case "1": //echo "se ingresa";

                                                $trabajo=new Trabajo();
                                                $nombreTrabajo = filter_var($_REQUEST['txt_nombreTrabajo'], FILTER_SANITIZE_STRING);
                                                $trabajo->setnombreTrabajo($nombreTrabajo);

                                                $descripcionTrabajo = filter_var($_REQUEST['txt_descripcionTrabajo'], FILTER_SANITIZE_STRING);
                                                $trabajo->setdescripcionTrabajo($descripcionTrabajo);

                                                $costo = filter_var($_REQUEST['txt_costo'], FILTER_SANITIZE_NUMBER_INT);
                                                $trabajo->setcosto($costo);

                                                $idservicio = filter_var($_REQUEST['servicio'], FILTER_SANITIZE_NUMBER_INT);
                                                $trabajo->setidServicio($idservicio);

                                                if($trabajo->insertarTrabajo()){
                                                    echo"1";
                                                }else{
                                                    echo"2";
                                                }

                                            break;

                            case "2": //echo "SE MODIFICA";
                                            $trabajo = new Trabajo();

                                            $trabajo->setidTrabajo($_REQUEST['txt_idtrabajo_modificar']);

                                            $nombreTrabajo = filter_var($_REQUEST['txt_nombreTrabajo_modificar'], FILTER_SANITIZE_STRING);
                                                $trabajo->setnombreTrabajo($nombreTrabajo);

                                                $descripcionTrabajo = filter_var($_REQUEST['txt_descripcionTrabajo_modificar'], FILTER_SANITIZE_STRING);
                                                $trabajo->setdescripcionTrabajo($descripcionTrabajo);

                                                $costo = filter_var($_REQUEST['txt_costo_modificar'], FILTER_SANITIZE_NUMBER_INT);
                                                $trabajo->setcosto($costo);

                                                $idservicio = filter_var($_REQUEST['cmb_servicio_modificar'], FILTER_SANITIZE_NUMBER_INT);
                                                $trabajo->setidServicio($idservicio);

                                            $trabajo->insertarTrabajo();

                                            break;
                            case "3": //echo "SE ELIMINA";
                                                $trabajo=new Trabajo();

                                                $trabajo->setidTrabajo($_REQUEST['id']);

                                                $trabajo->eliminarTrabajo();


                                                break;

                            case "4":
                                                 ?>


                                             <!-- tabla -->

                                             <div class="table-responsive">


                                            <table class="table table-bordered table-hover table-condensed" id="tablaTrabajo">
                                                  <thead class="active danger tablaHead">
                                                        <th>Trabajo</th>
                                                        <th>Descripcion</th>
                                                        <th>Costo</th>
                                                        <th>Servicio</th>

                                                        <th>Editar Eliminar </th>
                                                    </thead>
                                                    <?php
                                                        require_once'../clases/claseTrabajos.php';
                                                        $trab = new Trabajo();
                                                        $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                                        $filas = $trab->BuscarFiltarRegistros("vistatrabajos","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                                        $contador=0;

                                                        foreach($filas[0][0] as $trabajos){
                                                                $contador++;

                                                    echo'
                                                    <tr class="tablaFilas">


                                                        <td><span class="hidden" id="txt_idTrabajo'.$contador.'">'.$trabajos['id_trabajo'].'</span>
                                                        <span id="txt_nombreTrabajo'.$contador.'">'.$trabajos['nombre_trabajo'].'</span></td>
                                                        <td><span id="txt_descripcionTrabajo'.$contador.'">'.$trabajos['descripcion_trabajo'].'</span></td>
                                                        <td><span id="txt_costo'.$contador.'">'.$trabajos['costo'].'</span></td>
                                                        <td><span class="hidden" id="txt_idServicio'.$contador.'">'.$trabajos['id_servicio'].'</span>
                                                        <span id="txt_descripcionServicio'.$contador.'">'.$trabajos['descripcion_servicio'].'</span></td>

                                                        <!--  botones editar -->
                                                        <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarTrabajo" class="btn btn-warning">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                                                        <!--  botones eliminar -->
                                                        <button type="button" class="btn btn-danger" onclick="eliminarTrabajo(\''.$trabajos['id_trabajo'].'\');" aria-label="left aling">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                                    </tr>';
                                                     } ?>
                                                     <tr>
                                                         <td colspan="7">
                                                             <center>
                                                                <?php
                                                                    echo $filas[0][1];
                                                                 ?>
                                                             </center>
                                                         </td>
                                                     </tr>
                                            </table>
                                            </div>
                                             <?php
																						 break;
																			 }
																			 break;
											// Mantenedor SUBCATEGORIA
													case "9" :
																			require_once'../clases/claseCategoriaProducto.php';
																			 switch($_REQUEST['func']){
															case "1": //echo "se ingresa";
                              // $nombreTrabajo = filter_var($_REQUEST['txt_nombreTrabajo_modificar'], FILTER_SANITIZE_STRING);
                              //     $trabajo->setnombreTrabajo($nombreTrabajo);

																			 					$catProd=new CategoriaProducto();

                                                $descripcionProd = filter_var($_REQUEST['txt_catProd'], FILTER_SANITIZE_STRING);
																			 					$catProd->setdescripcion_categoria_producto($descripcionProd);

																			 					if($catProd->insertarCatProducto()){
																									echo "1";
																								}else{
																									echo "error al ingresar.";
																								}

																			 			break;
															case "2": //echo "SE MODIFICA";
	                                            $catProd=new CategoriaProducto();

	                                            $catProd->setid_categoria_producto($_REQUEST['txt_num_Modificar']);

                                              $descProd = filter_var($_REQUEST['txt_catProdModificar'], FILTER_SANITIZE_STRING);
                                              $catProd->setdescripcion_categoria_producto($descProd);
	                                            $catProd->insertarCatProducto();

	                                            break;


															 case "3": //echo "SE ELIMINA";
																			 					$catProd=new CategoriaProducto();

																			 					$catProd->setid_categoria_producto($_REQUEST['id']);

																			 					$catProd->eliminarCatProducto();


																			 					break;

															 case "4":
																			 					 ?>


																			 			 <!-- tabla -->

																			 			 <div class="table-responsive">


																			 			<table class="table table-bordered table-hover table-condensed" id="tablaCatProducto">
																			 							<thead class="active danger tablaHead">
																			 									<th>Numero categoría</th>
																			 									<th>Categoría producto</th>

																			 									<th>Editar Eliminar </th>
																			 							</thead>
																			 							<?php
																			 									require_once'../clases/claseCategoriaProducto.php';
																	 											$catProducto = new CategoriaProducto();
																			 									$buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
																			 									$filas = $catProducto->BuscarFiltarRegistros("vistacatproducto","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

																			 									$contador=0;

																			 									foreach($filas[0][0] as $categoriaProducto){
																			 													$contador++;

																			 							echo'
																			 							<tr class="tablaFilas">
																			 									<td><span id="txt_num'.$contador.'">'.$categoriaProducto['id_categoria_producto'].'</span></td>
																			 									<td><span id="txt_catProd'.$contador.'">'.$categoriaProducto['descripcion_categoria_producto'].'</span></td>

																			 									<!--  botones editar -->
																			 									<td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarCatProd" class="btn btn-warning">
																			 									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>



																			 									<!--  botones eliminar -->
																			 									<button type="button" class="btn btn-danger" onclick="eliminarCatProducto(\''.$categoriaProducto['id_categoria_producto'].'\');" aria-label="left aling">
																			 									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
																			 							</tr>';
																			 							 } ?>
																			 							 <tr>
																			 									 <td colspan="7">
																			 											 <center>
																			 													<?php
																			 															echo $filas[0][1];
																			 													 ?>
																			 											 </center>
																			 									 </td>
																			 							 </tr>
																			 			</table>
																			 			</div>
																						<?php
break;
}
break;

      case "10":
                  require_once'../clases/claseSubCatProducto.php';
                   switch($_REQUEST['func']){
          case "1": //echo "se ingresa";

                            $subCatProd=new SubCatProducto();

                            $descSubCat = filter_var($_REQUEST['txt_subCat'], FILTER_SANITIZE_STRING);
                            $subCatProd->setdescripcion_subcategoria_producto($descSubCat);

                            $subCatProd->setid_categoria_producto($_REQUEST['cmb_SubCat']);

                            //$subCatProd->insertarSubCategoria();

                            if($subCatProd->insertarSubCategoria()){
                              echo "1";
                            }else{
                              echo "error al ingresar.";
                            }


                        break;
          case "2": //echo "SE MODIFICA";
           $subCat=new SubCatProducto();

          $subCat->setid_subcategoria_producto($_REQUEST['txt_id_SubProducto_modificar']);
          $subCat->setdescripcion_subcategoria_producto($_REQUEST['txt_subCat_modificar']);
          $subCat->setid_categoria_producto($_REQUEST['cmb_SubCat_modificar']);

          $subCat->modificarSubCat();
          break;

           case "3": //echo "SE ELIMINA";
                            $subCat=new SubCatProducto();

                            //$subCat->id_subcategoria_producto($_REQUEST['id']);
                            	$subCat->setid_subcategoria_producto($_REQUEST['id']);

                            $subCat->eliminarSubCat();


                            break;

           case "4":
                             ?>


                         <!-- tabla -->

                         <div class="table-responsive">


                        <table class="table table-bordered table-hover table-condensed" id="fondo">
                                <thead class="active danger tablaHead">
                                    <th>Numero Sub Categoría</th>
                                    <th>Sub Categoría producto</th>
                                    <th>Categoría producto</th>

                                    <th>Editar Eliminar </th>
                                </thead>
                                <?php
                                    require_once'../clases/claseSubCatProducto.php';
                                    $SubCatProd = new SubCatProducto();
                                    $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                    $filas = $SubCatProd->BuscarFiltarRegistros("vistasubcatproducto","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                    $contador=0;

                                    foreach($filas[0][0] as $SubCatProducto){
                                            $contador++;

                                echo'
                                <tr class="tablaFilas">
                                    <td><span id="txt_id_SubProducto'.$contador.'">'.$SubCatProducto['id_subcategoria_producto'].'</span></td>
                                    <td><span id="txt_subCat'.$contador.'">'.$SubCatProducto['descripcion_subcategoria_producto'].'</span></td>
                                    <td><span class="hidden" id="txt_idCat'.$contador.'">'.$SubCatProducto['id_categoria_producto'].'</span>
                                    <span id="cmb_SubCat'.$contador.'">'.$SubCatProducto['descripcion_categoria_producto'].'</span></td>

                                    <!--  botones editar -->
                                    <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificarSubCat" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>



                                    <!--  botones eliminar -->
                                    <button type="button" class="btn btn-danger" onclick="eliminarSubCat(\''.$SubCatProducto['id_subcategoria_producto'].'\');" aria-label="left aling">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                </tr>';
                                 } ?>
                                 <tr>
                                     <td colspan="7">
                                         <center>
                                            <?php
                                                echo $filas[0][1];
                                             ?>
                                         </center>
                                     </td>
                                 </tr>
                        </table>
                        </div>
                  <?php
break;
}
break;

case "11" :
require_once'../clases/claseCompra.php';
$compra=new Compra();

switch($_REQUEST['func']){

  case "1": //echo "se ingresa";



                        $fecha = $_REQUEST['fecha'];
                        $idUsuario = $_SESSION['id'];
                        $idProveedor = $_REQUEST['cmb_proveedores'];

                        $compra->setfecha($fecha);
                        $compra->setidUsuario($idUsuario);
                        $compra->setrut($idProveedor);


                      if($compra->insertarCompra()){
                        echo "id de compra en sesion: ".$_SESSION['idCompra'];
                      }else{
                        echo "ERROR AL INGRESAR";
                      }

    break;

    case "2":

                  $producto= $_REQUEST['cmb_productos'];
                  $cantidad= $_REQUEST['txt_cantidad'];
                  $valor= $_REQUEST['txt_valor'];

                  $compra->setIdCompra($_SESSION['idCompra']);
                  $compra->setProducto($producto);
                  $compra->setcantidad($cantidad);
                  $compra->setvalor($valor);

                  if($compra->insertarDetalle()){
                      echo "INGRESADO CORRECTAMENTE";
                  }else{
                    echo "2";
                  }

                break;

                    case "3":
                    ?>
                    <div class="container">
                                   <div class="col-md-10-centered">
                                       <div class="panel panel-default">
                                           <div class="panel-heading">
                                                   <h3 class="panel-title">Ingreso de productos</h3>
                                           </div>
                                               <div class="panel-body">
                      <form id="formularioCompra" class="form-horizontal" action="javascript:guardarDetalle();" method="post">

                        <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                             <div class="form-group">
                      <label for="cmb_proveedores">Productos</label>
                           <select class="form-control" name="cmb_productos" id="cmb_productos">
                              <?php
                                  require_once '../clases/claseProductos.php';
                                  $prod= new Productos();
                                  $filasProd= $prod->listarProductos();
                                  foreach($filasProd as $tipo){
                                      echo '<option value="'.$tipo['id_producto'].'" >'.$tipo['descripcion_producto'].'</option>';
                                  }
                               ?>
                    </select>
                    </div>
                      </div>

                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                        <div class="form-group">
                            <label for="apellido">Cantidad</label>
                            <input class="form-control" title="Debe ingresar fecha" required id="txt_cantidad" name="txt_cantidad" placeholder="" type="txt">
                        </div>
                    </div>
                    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
                        <div class="form-group">
                            <label for="apellido">Valor</label>
                            <input class="form-control" title="Valor" required id="txt_valor" name="txt_valor" placeholder="$$$$$$$$" type="txt">
                        </div>
                    </div>


                      <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar" >
                      </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php
                      break;

                      case "4":
                      ?>
                    <div class="container">
                      <table class="table table-bordered table-hover table-condensed" id="fondo">
                              <thead class="active danger tablaHead">
                                  <th>Numero boleta</th>
                                  <th>Cantidad</th>
                                  <th>Valor</th>

                                  <th>Editar Eliminar </th>
                              </thead>
                              <tbody>
                              <?php
                              $compra->setIdCompra($_SESSION['idCompra']);
                              $filas= $compra->listarDetalleCompra();
                              foreach($filas as $columnas){
                           ?>
                              <tr class="tablaFilas">
                                <td><?php echo $columnas['id_detalle_compra'];  ?></td>
                                <td><?php echo $columnas['cantidad'];  ?></td>
                                <td><?php echo $columnas['valor'];  ?></td>


                                <!--  botones eliminar -->
                                <td><button type="button" class="btn btn-danger" onclick="eliminarDetalle(\''.$columnas['id_detalle_compra'].'\');" aria-label="left aling">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
</tr>
                      <?php      } ?>
                        </tbody>
                      </table>
                    </div>
<?php
}
break;
                  case "12":
                              require_once'../clases/clasevehiculo.php';
                               switch($_REQUEST['func']){
                      case "1": //echo "se ingresa";

                                        $vehiculo=new Vehiculo();

                                        $patente = filter_var($_REQUEST['txt_patente'], FILTER_SANITIZE_STRING);
                                        $vehiculo->setpatente($patente);

                                        $marca = filter_var($_REQUEST['txt_marca'], FILTER_SANITIZE_STRING);
                                        $vehiculo->setmarca($marca);

                                        $patente = filter_var($_REQUEST['txt_modelo'], FILTER_SANITIZE_STRING);
                                        $vehiculo->setmodelo($patente);

                                        $vehiculo->setrun($_REQUEST['cmb_usuario']);

                                       $vehiculo->insertarVehiculo();


                                          // if($patente->insertarVehiculo()){
                                          //   echo "1";
                                          // }else{
                                          //   echo "error al ingresar.";
                                          // }


                                    break;
                      case "2": //echo "SE MODIFICA";
                       $vehiculo=new Vehiculo();

                      $vehiculo->setid_subcategoria_producto($_REQUEST['txt_id_SubProducto_modificar']);
                      $vehiculo->setdescripcion_subcategoria_producto($_REQUEST['txt_subCat_modificar']);
                      $vehiculo->setid_categoria_producto($_REQUEST['cmb_SubCat_modificar']);

                      $vehiculo->modificarVehiculo();
                      break;

                       case "3": //echo "SE ELIMINA";
                                        $vehiculo=new Vehiculo();

                                        //$subCat->id_subcategoria_producto($_REQUEST['id']);
                                          $vehiculo->setpatente($_REQUEST['id']);

                                        $vehiculo->eliminarVehiculo();


                                        break;

                       case "4":
                                         ?>


                                     <!-- tabla -->

                                     <div class="table-responsive">


                                    <table class="table table-bordered table-hover table-condensed" id="fondo">
                                            <thead class="active danger tablaHead">
                                                <th>Patente</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Run</th>
                                                <!-- <th>Nombre</th>
                                                <th>Apellido</th> -->

                                                <th>Editar Eliminar </th>
                                            </thead>
                                            <?php
                                                require_once'../clases/clasevehiculo.php';
                                                $vehiculo = new Vehiculo();
                                                $buscar = filter_var($_REQUEST['buscar'], FILTER_SANITIZE_STRING);
                                                $filas = $vehiculo->BuscarFiltarRegistros("vervehiculos","campoBuscar",$buscar,$_REQUEST['pag'],$_REQUEST['cantidadReg']);

                                                $contador=0;

                                                foreach($filas[0][0] as $vehiculoUsuario){
                                                        $contador++;

                                            echo'
                                            <tr class="tablaFilas">
                                                <td><span id="txt_patente'.$contador.'">'.$vehiculoUsuario['patente'].'</span></td>
                                                <td><span id="txt_marca'.$contador.'">'.$vehiculoUsuario['marca'].'</span></td>
                                                <td><span id="txt_modelo'.$contador.'">'.$vehiculoUsuario['modelo'].'</span></td>
                                                <td><span id="cmb_usuario'.$contador.'">'.$vehiculoUsuario['run'].'</span></td>

                                                <!--  botones editar -->
                                                <td><button type="button" onclick="cargarDatosModal('.$contador.')" data-toggle="modal" data-target="#modificar" class="btn btn-warning">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>


                                                <!--  botones eliminar -->
                                                <button type="button" class="btn btn-danger" onclick="eliminarVehiculo(\''.$vehiculoUsuario['patente'].'\');" aria-label="left aling">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                            </tr>';
                                             } ?>
                                             <tr>
                                                 <td colspan="7">
                                                     <center>
                                                        <?php
                                                            echo $filas[0][1];
                                                         ?>
                                                     </center>
                                                 </td>
                                             </tr>
                                    </table>
                                    </div>
                              <?php
            break;
            }
        break;

      }

      ?>
