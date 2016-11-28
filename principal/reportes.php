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
</head>
<title>Mantenedores</title>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php cargarMenu(); ?>
       <!--  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div> <!-- class="navbar-header" -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <!--   <a class="navbar-brand" href="index.html">Figuesep</a> -->
            </div>
            <!-- Top Menu Items -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" id="fondo">

                <li class="lineaLi">
                    <a href="../principal/indexAdmin.php" value="SubCatProducto" onclick="cargarDivStock();">Inicio</a>
                </li>

                <li class="lineaLi">
                    <a href="#" value="ProductosVendidos" onclick="cargarDivVendidos();">Producto más vendidos</a>
                        <script type="text/javascript">
                            function cargarDivVendidos(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                            $.ajax({url: '../reportes/vendidos.php',
                                success:function(data){
                                $("#page-wrapper").html(data);
                                                      }
                                    });
                                  }
                        </script>
                </li>
                <li class="lineaLi">
                    <a href="#" value="stock" onclick="cargarDivStock();">Stock</a>
                        <script type="text/javascript">
                            function cargarDivStock(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                            $.ajax({url: '../reportes/stockProductos.php',
                                success:function(data){
                                $("#page-wrapper").html(data);
                                                      }
                                    });
                                  }
                        </script>
                </li>
                <li class="lineaLi">
                    <a href="#" value="clientes" onclick="cargarDivClientes();">Clientes</a>
                        <script type="text/javascript">
                            function cargarDivClientes(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/
                            $.ajax({url: '../reportes/clientes.php',
                                success:function(data){
                                $("#page-wrapper").html(data);
                                                      }
                                    });
                                  }
                        </script>
                </li>
            </ul>
            </div>
            <!-- /.navbar-collapse -->

<br>
<div id="page-wrapper">

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
