<?php
  include '../comun/comun.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Ventas</title>
  <?php   cargarHeader(); ?>
</head>
<body>
    
  <header>
    <?php cargarMenu(); ?>
  </header> 
       <body>           
             <br>
                      <div class="container">
                          <div class="col-xs-8 col-sm-8 col-md-3">
                                <label for="numero">Nº Orden</label>
                                <input class="form-control" type="text" placeholder="Nº de orden">
                          </div>
                      </div>
                         
          <!-- Venta -->
          <div class="container">
                      <section class="row">
                            
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="id">Código:</label>
                                            <input class="form-control" id="txt_id_producto" name="txt_id_producto" placeholder="Código de producto" type="text">
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="descripcion">Descripción:</label>
                                            <input class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Descripción de productos" type="text">
                                        </div>
                                   
                                    
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="valor">Valor:</label>
                                            <input class="form-control" id="txt_valor" name="txt_valor" placeholder="Valor del producto" type="text">
                                        </div>
                                   
                                        <!-- <div class="form-group">
                                            <label for="imagen">Subir Imagen</label>
                                            <input type="file" id="txt_imagen" name="txt_imagen">
                                            <!-- <input class="form-control" id="txt_imagen" name="txt_imagen" placeholder="" type=""> -->
                         
                          </section>
                       
                
                                  <div class="row">
                                         <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="cmb_proveedores">Proveedores</label>
                                                 <select class="form-control" name="cmb_proveedores" id="cmb_proveedores">
                                                    <?php 
                                                        require_once '../clases/claseProveedor.php';
                                                        $prov= new Proveedor();
                                                        $filasProv= $prov->listarProveedor();
                                                        foreach($filasProv as $tipo){
                                                            echo '<option value="'.$tipo['rut'].'" >'.$tipo['razon_social'].'</option>';
                                                        }
                                                     ?>
                                                  </select> 
                                         </div>
                                 

                                    
                                          <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="tipoUsuario">Estado producto</label>
                                                  <select class="form-control" name="cmb_estado_producto" id="cmb_estado_producto">
                                                    <?php 
                                                        require_once '../clases/claseEstadoProducto.php';
                                                        $prod= new EstadoProducto();
                                                        $filasProduc= $prod->listarEstadoProducto();
                                                        foreach($filasProduc as $tipo){
                                                            echo '<option value="'.$tipo['id_estado_producto'].'" >'.$tipo['descripcion_estado_producto'].'</option>';
                                                        }
                                                     ?>
                                                  </select> 
                                          </div>

                                          <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="tipoUsuario">Categoria producto</label>
                                                 <select class="form-control" name="cmb_categoria_producto" id="cmb_categoria_producto">
                                                    <?php 
                                                        require_once '../clases/claseCategoriaProducto.php';
                                                        $cat= new CategoriaProducto();
                                                        $filasCat= $cat->listarCategoriaProducto();
                                                        foreach($filasCat as $tipo){
                                                            echo '<option value="'.$tipo['id_categoria_producto'].'" >'.$tipo['descripcion_categoria_producto'].'</option>';
                                                        }
                                                     ?>
                                                </select> 
                                          </div>

                                </div>


                                <div class="row">
                                    
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="run">Run:</label>
                                            <input class="form-control" onBlur="validarRun(this)" title="Debe ingresar un rut valido" required id="txt_run" name="txt_run" placeholder="Rut Usuario" type="text">
                                        </div>
                                 
                                    
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control" title="Debe ingresar su nombre" required id="txt_nombre" name="txt_nombre" placeholder="Nombre Usuario" type="text">
                                        </div>
                                   
                                    
                                        <div class="form-group col-xs-12 col-sm-8 col-md-3">
                                            <label for="apellido">Apellido</label>
                                            <input class="form-control" title="Debe ingresar su apellido" required id="txt_apellido" name="txt_apellido" placeholder="Apellido Usuario" type="text">
                                        </div>
                                  
                                    

                                </div>



          </div>             

<!-- Detalle venta -->
          

</body>
</html>