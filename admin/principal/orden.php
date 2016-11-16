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
                         
          <!-- Venta -->
          <div class="container">
                        <section class="row">
                            
                           <article class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
                          <label for="nombre">Código de barra:<span class="glyphicon glyphicon-search"></span></label><br>
                            <input class="form-control" type="text" placeholder="Producto">
                            <br>
                            <label for="nombre">Descripcion producto:</label>
                                <input class="form-control" type="text" placeholder="Descripcion producto">
                                <label for="nombre">Precio:</label>
                                <input class="form-control" type="text" placeholder="$$$">
                                <label for="nombre">Stock:</label>
                                <input class="form-control" type="text" placeholder="Stock">
                                <br>
                         <div class="container">
                                <div class="col-md-12">
                                    <button class="btn btn-success">Ingresar</button>
                                            
                                    </div>
                                    <br>
                                    </div>
                                
                              

                          </article> 
                        
                    
                           <aside class="col-xs-12 col-sm-8 col-md-4 col-lg-4">

                            
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <!-- <p>Producto#1</p> -->
                            <!-- Ventana modal -->
                            <!-- <a href="#ventana1" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a> -->
                            <div class="modal fade" id="ventana1">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <!-- <h3 class="modal-title">Proveedor</h3> -->
                                          </div>
                                          <div class="modal-body">
                                               <!-- <img src="imagenes/usuario.jpg" alt="" class="img-responsive"> -->
                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, doloremque?</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
                                          </div>
                                       </div>
                                   </div> 
                                </div>
                                <!-- Termino ventana modal -->
                            
                            </div>
                           </div>
                      
                            
                            
                           </aside> 
                         </section>
                         </div>

<!-- Detalle venta -->
            <div class="container-fluid">
                        <section class="main">
                            
                           <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <br>
                            <br>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover"> 
                                        <tr class="active danger">
                                            <th>Cantidad</th>
                                            <th>Id</th>
                                            <th>Precio</th>
                                            <th>Descuento</th>
                                            <th>Stock</th>
                                            <th>Total</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1234</td>
                                            <td>12000</td>
                                            <td>-1200</td>
                                            <td>4</td>
                                            <td>$10800</td>
                                            <td><button type="button" class="btn btn-default" aria-label="left aling"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                            <buttontype="button" class="btn btn-default" aria-label="left aling"> 
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>

                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>21233</td>      
                                            <td>10200</td>
                                            <td>-1020</td>
                                            <td>3</td>
                                            <td>$9180</td>
                                            <td><button type="button" class="btn btn-default" aria-label="left aling"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                            <buttontype="button" class="btn btn-default" aria-label="left aling"> 
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                                                          </tr>
                                </table>
                                        

                        </div>  
                         <div class="container">
                                    <div class="col-md-4">
                                        
                                            <button class="btn btn-success">Finalizar venta</button>
                                            <button class="btn btn-primary">Limpiar</button>                                           
                                           
                                        </div>
                                        </div>
                          </article> 
                        
                    
                           <aside class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br>
                            <br>
                            
                                <label for="nombre">Cantidad de productos:</label>
                                <input class="form-control" type="text" placeholder="?">
                                <label for="nombre">Iva:</label>
                                <input class="form-control" type="text" placeholder="Iva">
                                <label for="nombre">Total final:</label>
                                <input class="form-control" type="text" placeholder="Total final">
                        
                           </aside> 
                         </section>
                         </div>
           
                        
                        

    
   <!--  <footer>
        <div class="container">
            <h3>Final de pagina</h3>
        </div>
    </footer> -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>