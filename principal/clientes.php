<?php
    include '../comun/comun.php';
 
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
     <?php cargarHeader(); ?>
</head>
   <title>Clientes</title>
   
    
<body>
    
    <header>
        <?php cargarMenu(); ?>
    </header>   

   
<br><br><br>
     <!-- Venta -->
        <div class="container">
                <section class="row">
                            
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-md-offset-1">
                          <label for="nombre">Buscar cliente:<span class="glyphicon glyphicon-search"></span></label>
                                <input class="form-control" type="text" placeholder="xxxxxxxx">
                                
                            <!--     <div class="col-md-4">
                                            <button class="btn btn-success">Ingresar</button>
                                            
                                    </div> -->
                        </article> 
                        
                    
                        <aside class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-md-offset-0">
                            <br>
                                <button class="btn btn-success">Ingresar</button>
                                <button class="btn btn-success">Ver</button>
                           
                        </aside> 

                           
                </section>
        </div>
                         <br>   
                            <div class="container">
                                    <div class="col-md-8">
                                            <button class="btn btn-success">Ordenar por codigo</button>
                                            <button class="btn btn-success">Fecha</button>
                                            <button class="btn btn-success">Tipo servicio</button>
                                        </div>
                            </div>
<!-- Detalle venta -->
            <div class="container-fluid">
                        <section class="main">
                            
                           <article class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <br>
                            <br>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" color="fff"> 
                                        <tr class="active danger">
                                            <th>Run</th>
                                            <th>Nombre</th>
                                            <th>Apellido</td>
                                            <th>Télefono</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Patente</th>
                                            <th>Tipo servicio</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        <tr>
                                            <td>18319075-k</td>
                                            <td>Billy Williams</td>
                                            <td>Sanchez</td>
                                            <td>990576545</td>
                                            <td>Lamborghini</td>
                                            <td>Veneno</td>
                                            <td>GTHG-12</td>
                                            <td>Lavado</td>
                                            <td><button type="button" class="btn btn-default" aria-label="left aling"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                            <button type="button" class="btn btn-default" aria-label="left aling"> 
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>

                                        </tr>
                                        <tr>
                                            <td>12345436</td>
                                            <td>Luis</td>      
                                            <td>Mendoza</td>
                                            <td>967565432</td>
                                            <td>Chevrolet</td>
                                            <td>Luv</td>
                                            <td>Rt-4567</td>
                                            <td>Mantención alza vidrios</td>
                                            <td><button type="button" class="btn btn-default" aria-label="left aling"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                            <button type="button" class="btn btn-default" aria-label="left aling"> 
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                                        </tr>
                                </table>
                                        

                        </div>  
                         <div class="container">
                                    <div class="col-md-8">
                                            <button class="btn btn-success">Imprimir trabajos a realizar</button>
                                            <button class="btn btn-primary">Limpiar</button>
                                            <button class="btn btn-danger">Eliminar</button>
                                        </div>
                                        </div>
                          </article> 
                        
                    
                         </section>
                         </div>
           


        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>