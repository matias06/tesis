<div class="table-responsive">
                    <table class="table table-bordered table-hover table-condensed" id="fondo">
                              <thead class="active danger tablaHead">

                                <th>Codigo</th>
                                <th>Descripción</th>
                                <th>Valor</th>
                                <th>Proveedor</th>
                                <th>Estado producto</th>
                                <th>Categoría producto</th>
                                <th>Sub Categoría producto</th>
                                <th>Editar/Eliminar </th>
                            </thead>

                            <?php
                            require_once'../clases/claseProductos.php';
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
                                <span id="cmb_proveedor'.$contador.'">'.$user['razon_social'].'</span></td>

                                <td><span class="hidden" id="cmb_id_estado_producto'.$contador.'">'.$user['id_estado_producto'].'</span>
                                <span id="cmb_estado_producto'.$contador.'">'.$user['descripcion_estado_producto'].'</span></td>

                                <td><span class="hidden" id="cmb_id_categoria_producto'.$contador.'">'.$user['id_categoria_producto'].'</span>
                                <span id="cmb_categoria_producto'.$contador.'">'.$user['descripcion_categoria_producto'].'</span></td>

                                <td><span class="hidden" id="cmb_id_subcategoria_producto'.$contador.'">'.$user['id_subcategoria_producto'].'</span>
                                <span id="cmb_subcategoria_producto'.$contador.'">'.$user['descripcion_subcategoria_producto'].'</span></td>




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
