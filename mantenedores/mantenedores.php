<?php
    include '../comun/comun.php';
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
     <?php cargarHeader(); ?>
     <link rel="stylesheet" href="../css/estilo.css">
     <meta charset = "UTF-8">
</head>
<title>Mantenedores</title>


<body>
<?php cargarMenu(); ?>
    <div id="wrapper">

        <!-- Navigation -->

       <!--  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> -->
            <!-- Brand and toggle get grouped for better mobile display -->

            <!-- <div class="container-fluid">
            <div class="navbar-header"
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
          </div> -->
            <!-- Top Menu Items -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!-- <div class="collapse navbar-collapse navbar-ex1-collapse"> -->
                <!-- <ul class="nav navbar-nav side-nav" id="fondo">
                    <li class="fondo lineaLi">
                        <a href="mantenedores.php" value="Usuario" onclick="cargarDivUsuario();"> Usuario</a>
                    </li>


        <script type="text/javascript">
            function cargarDivUsuario(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                    $.ajax({url: '../mantenedores/mantUsuario.php',
                         success:function(data){
                           $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>

                    <li class="lineaLi">
                        <a href="#" value="Productos" onclick="cargarDivProductos();">Producto</a>

        <script type="text/javascript">
            function cargarDivProductos(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

            $.ajax({url: '../mantenedores/mantProductos.php',
                success:function(data){
                $("#page-wrapper").html(data);
                                      }
                    });
                                      }
        </script>
                    </li>
                    <li class="lineaLi">
                        <a href="#" value="proveedor" onclick="cargarDivProveedor();">Proveedor</a>
                        <script type="text/javascript">
                            function cargarDivProveedor(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantProveedor.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>

                    <li class="lineaLi">
                        <a href="#" value="servicios" onclick="cargarDivServicios();">Servicios</a>
                        <script type="text/javascript">
                            function cargarDivServicios(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantServicios.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>
                    <li class="lineaLi">
                        <a href="#" value="trabajos" onclick="cargarDivTrabajos();">Trabajos</a>
                        <script type="text/javascript">
                            function cargarDivTrabajos(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantTrabajos.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>
                    <li class="lineaLi">
                        <a href="#" value="servicios" onclick="cargarDivRegion();">Región</a>
                        <script type="text/javascript">
                            function cargarDivRegion(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantRegion.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>
                    <li class="lineaLi">
                        <a href="#" value="ciudad" onclick="cargarDivCiudad();">Ciudad</a>
                        <script type="text/javascript">
                            function cargarDivCiudad(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantCiudad.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>
                    <li class="lineaLi">
                        <a href="#" value="vehiculo" onclick="cargarDivVehiculo();">Vehiculo</a>
                        <script type="text/javascript">
                            function cargarDivVehiculo(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                                $.ajax({url: '../mantenedores/mantVehiculo.php',
                                        success:function(data){
                                            $("#page-wrapper").html(data);
                                        }
                                });
                            }
                            </script>
                    </li>

                <li class="lineaLi">
                    <a href="#" value="CatProducto" onclick="cargarDivCatProducto();">Categoria producto</a>
                    <script type="text/javascript">
                        function cargarDivCatProducto(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                            $.ajax({url: '../mantenedores/mantCatProducto.php',
                                    success:function(data){
                                        $("#page-wrapper").html(data);
                                    }
                            });
                        }
                        </script>
                </li>

                <li class="lineaLi">
                    <a href="#" value="SubCatProducto" onclick="cargarDivSubCatProducto();">Sub Categoria producto</a>
                    <script type="text/javascript">
                        function cargarDivSubCatProducto(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

                            $.ajax({url: '../mantenedores/mantSubCatProducto.php',
                                    success:function(data){
                                        $("#page-wrapper").html(data);
                                    }
                            });
                        }
                        </script>
                </li>
              </ul> -->
            <!-- </div> -->
            <!-- /.navbar-collapse -->


<div class="container" id="page-wrapper">

</div>

           <!--  Se cargan todas las paginas en este Div  -->
              <script type="text/javascript">

        cargarDivUsuario();

                            </script>

   <!-- /.container-fluid -->

    </div>
    <!-- /#wrapper -->
</body>
</html>
