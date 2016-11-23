<?php session_start();
global $con;


function cargarHeader(){
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilo.css">
<link href="../css/sb-admin.css" rel="stylesheet"> <!-- menu botones del mantenedor -->
<!-- <link href="../css/plugins/morris.css" rel="stylesheet"> -->
<!-- <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

<!-- <script src="../js/jquery.validate.min.js"></script> -->
<script src="../js/sweetalert.min.js"></script>
<!-- <link rel="stylesheet" href="../js/validaciones.js">
<link rel="stylesheet" href="../js/validar_formulario.js"> -->
<link rel="stylesheet" type="text/css" href="../css/sweet-alert.css">


<?php
}

function cargarMenu(){
?>
           <div class="row">
            <div class="container">
            <header>
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                          <img src="../comun/logo/fsp.png" alt="" width="220" height="50">
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-1">
                            <ul class="nav navbar-nav">

                                <li><a href="../principal/reportes.php">Reportes</a></li>
                                <li><a href="../mantenedores/mantenedores.php">Mantenedores</a></li>
                                <li><a href="../principal/proveedores.php">Proveedores</a></li>
                                <li><a href="../principal/clientes.php">Clientes</a></li>
                                <li><a href="../principal/orden.php">Orden de trabajo</a></li>
                                <li><a href="../comun/destruirSesion.php">Cerrar Sesión</a></li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </header>
        </div>
        </div>
<?php
}

// function cargarAjaxMantenedor(){
    ?>
    <script type="text/javascript">
    //                         function cargarDivUsuario(){ /*AQUI LE DOY UN NOMBRE CUALQUIERA A LA FUNCION*/

    //                             $.ajax({url: '../mantenedores/mantUsuario.php',
    //                                     success:function(data){
    //                                         $("#page-wrapper").html(data);
    //                                     }
    //                             });
    //                         }
    //                         </script>
                            <?php
// }



function menuPublico(){
    ?>
    <div class="navbar navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div><img src="admin/comun/logo/fsp.png" alt="" width="245" height="55"></div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="servicios.php">Servicios</a>
                </li>
                <li>
                    <a href="catalogo.php">Catálogo</a>
                </li>
                <li>
                    <a href="contacto.php">Contacto</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href='#modal-id-1'>Iniciar Sesion</a></li>
                        <li><a href="registro.php">Registro</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>
        //modal//

        <div class="modal" id="modal-id-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Inicie Sesion</h4>
            </div>
            <div class="modal-body">

            <form id="inicio_sesion" name="inicio_sesion" action="#" align="center">
                <div class="form-group">
                <label for="run">Digite su RUN:</label><br>
                <input class="" name="run_usuario" type="text" placeholder="Run Usuario" OnBlur="validaRut(this.value)">
                </div><br>
                <div class="form-group">
                <label for="password">Ingrese Contraseña:</label><br>
                <input class="" name="password_usuario" type="password" placeholder="Contraseña">
                </div>
                <input type="submit" value="Aceptar" class="btn btn-success">
            </form>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

                    //script sesion


       <?php

}

function footerPublico(){
    ?>
    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-sm-6 col-md-4">

        <li><a href="contacto.php">Preguntas Frecuentes</a></li>
        <li><a href="catalogo.php">Categorias</a></li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="registro.php">Registrate</a></li>

    </div>

    </div>
</div>
<?php
}

function validaRut(str)
      {
          var rut = str.replace(/\./gi, "");

          //Valor acumulado para el calculo de la formula
          var nAcumula = 0;
          //Factor por el cual se debe multiplicar el valor de la posicion
          var nFactor = 2;
          //Dígito verificador
          var nDv = 0;

          //extraemos el digito verificador (La K corresponde a 10)
          if(rut.charAt(rut.length-1).toUpperCase()=='K'){
              nDvReal = 10;
          //el 0 corresponde a 11
          }else{
                  if(rut.charAt(rut.length-1)==0){
                      nDvReal = 11;
                  }else{
                      nDvReal = rut.charAt(rut.length-1);
                  }
          }

                 for(nPos=rut.length-2; nPos>0; nPos--){

                          var numero = rut.charAt(nPos-1).valueOf();
                          nAcumula =nAcumula+( numero*nFactor);

                          nFactor= nFactor+1;
                          if (nFactor==8){
                               nFactor = 2;
                          }

                  }

         nDv = 11-(nAcumula%11);

          if (nDv == nDvReal){
                  return true;
          }else{
              return false;
          }

      }

?>
