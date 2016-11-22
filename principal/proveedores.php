<?php
  include '../comun/comun.php';
 
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title>Proveedores</title>
  <?php   cargarHeader(); ?>
  
</head>
<body>
    
  <header>
    <?php cargarMenu(); ?>
  </header> 
       <body>
        <br>
        <br>
        
        <section class="main row">
           <aside class="col-md-2 hidden-xs hidden-sm">
                <div class="dropdow-group">
                   <div class="dropdown">
                       <button class="btn btn-default dropdown-toggle" type="button" id="dropcat" data-toggle="dropdown" aria-extended="true">
                       Categorias
                       <span class="caret"></span>
                       </button>
                       <ul class="dropdown-menu" role="menu" aria-labelledby="dropcat">
                           <li><a href="#">Proveedor #1</a></li>
                           <li><a href="#">Proveedor #2</a></li>
                           <li><a href="#">Proveedor #3</a></li>
                           <li><a href="#">Proveedor #4</a></li>
                           <li><a href="#">Proveedor #5</a></li>
                           <li><a href="#">Proveedor #6</a></li>
                           <li><a href="#">Proveedor #7</a></li>
                           <li><a href="#">Proveedor #8</a></li>
                           <li><a href="#">Proveedor #9</a></li>
                           <li><a href="#">Proveedor #10</a></li>
                       </ul>
                   </div>
                   </div>
                    <div class="btn">
                   <button class="btn btn-danger">
                       Aceptar
                   </button>
                   </div>
                  
           </aside>
           <!-- Imagen 1 -->
           <article class="col-xs-12 col-md-9 ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proveedor#1</p>
                            <!-- Ventana modal -->
                            <a href="#ventana1" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana1">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proveedor#2</p>
                             <!-- Ventana modal -->
                            <a href="#ventana2" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana2">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proveedor#3</p>
                             <!-- Ventana modal -->
                            <a href="#ventana3" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana3">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proveedor#4</p> <!-- Ventana modal -->
                            <a href="#ventana4" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana4">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proveedor#5</p>
                             <!-- Ventana modal -->
                            <a href="#ventana5" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana5">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proovedor#6</p>
                             <!-- Ventana modal -->
                            <a href="#ventana6" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana6">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proovedor#7</p>
                             <!-- Ventana modal -->
                            <a href="#ventana7" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana7">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/desierto.jpg" alt="" class="img-responsive">
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
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                           <div class="thumbnail">
                            <img src="../imagenes/images.jpg" alt="">
                            <div class="caption">
                            <p>Proovedor#8</p>
                             <!-- Ventana modal -->
                            <a href="#ventana8" class="btn btn-primary btn-xs" data-toggle="modal">Ver Proveedor</a>
                            <div class="modal fade" id="ventana8">
                                   <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h3 class="modal-title">Proveedor</h3>
                                          </div>
                                          <div class="modal-body">
                                               <img src="../imagenes/usuario.jpg" alt="" class="img-responsive">
                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, doloremque?
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi maxime impedit, voluptates eos, omnis possimus ad sequi nam fugit pariatur ullam minus cumque sit assumenda odit odio soluta illo eveniet.</p>
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
                        </div>
</div>
            </article>
       </section>
    
    <!-- <footer>
        <div class="container">
            <h3>Final de pagina</h3>
        </div>
    </footer> -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>