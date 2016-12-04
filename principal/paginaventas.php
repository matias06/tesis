<!DOCTYPE html>
<!--developers-->
<html lang="es" class="no-js">
<!--#####-nvm-#####-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Titulo de La Pagina</title>
    <meta name="Author" content="nvm" />

    <!-- > css generales < -->
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/lightbox.min.css" rel="stylesheet" />
    <link href="../css/normalize.css" rel="stylesheet" />

    <!-- > Bootstrap v3.3.7 and Font Awesome v4.6.3 < -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style type="text/css">

    .contenido-ventas{
        width: 100%;
        min-height: 100%;
        float: left;
        padding-top: 2rem;
    }

nav.sidebar, .main{
    -webkit-transition: margin 200ms ease-out;
      -moz-transition: margin 200ms ease-out;
      -o-transition: margin 200ms ease-out;
      transition: margin 200ms ease-out;
  }

  .main{
    padding: 10px 10px 0 10px;
  }

 @media (min-width: 765px) {

    .main{
      position: absolute;
      width: calc(100% - 40px);
      margin-left: 40px;
      float: right;
    }

    nav.sidebar:hover + .main{
      margin-left: 200px;
    }

    nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
      margin-left: 0px;
    }

    nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
      text-align: center;
      width: 100%;
      margin-left: 0px;
    }

    nav.sidebar a{
      padding-right: 13px;
    }

    nav.sidebar .navbar-nav > li:first-child{
      border-top: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav > li{
      border-bottom: 1px #e5e5e5 solid;
    }

    nav.sidebar .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
      padding: 0 0px 0 0px;
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
      color: #777;
    }

    nav.sidebar{
      width: 200px;
      height: 100%;
      margin-left: -160px;
      float: left;
      margin-bottom: 0px;
    }

    nav.sidebar li {
      width: 100%;
    }

    nav.sidebar:hover{
      margin-left: 0px;
    }

    .forAnimate{
      opacity: 0;
    }
  }

  /*==> Tabla ventas <==*/

  .tabla-ventas{
        padding: 1rem;
        border: .2rem solid green;
  }

  #btn--{
    margin-left: 1rem;
  }

  @media (min-width: 1330px) {

    .main{
      width: calc(100% - 200px);
      margin-left: 200px;
    }

    nav.sidebar{
      margin-left: 0px;
      float: left;
    }

    nav.sidebar .forAnimate{
      opacity: 1;
    }
  }

  nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #CCC;
    background-color: transparent;
  }

  nav:hover .forAnimate{
    opacity: 1;
  }
  section{
    padding-left: 15px;
  }


    </style>

</head>
<body>


<div class="contenido-ventas">

    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">

                <nav class="navbar navbar-default sidebar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1 <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                              <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sub Menu 4</a></li>
                              </ul>
                            </li>
                            <li ><a href="#">Menu 2<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                            <li ><a href="#">Menu 3<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                          </ul>
                        </div>
                    </div>
                </nav>

            </div>

            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">

                <div class="col-xs-12">

                <form action="" method="POST" role="form">
                    <legend>Datos:</legend>

                    <div class="form-group col-xs-12">
                        <label class="pull-left">Fecha: 20/05/2016</label>
                        <label class="pull-right">Numero Boleta: 1022</label>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Descripcion Producto">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Proveedor">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Valores">
                    </div>

                    <button type="submit" id="btn--" class="btn btn-xs btn-primary">BUSCAR &nbsp; <i class="fa fa-search fa-1g"></i></button>

                </form>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="table-responsive">
                    <h4 class="lead">Nombre de la Tabla</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Item 1</th>
                                    <th>Item 2</th>
                                    <th>Item 3</th>
                                    <th>Item 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ItemDesc1</td>
                                    <td>ItemDesc2</td>
                                    <td>ItemDesc3</td>
                                    <td>ItemDesc4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="sub_footer">
    <span>&copy;Todos Los Derechos Reservados</span>
</div>
<!-- > js importados < -->
<!-- > jquery antes de bootstrap para que funcione > -->
<script src="../js/jquery.min.js"></script><!--version v1.12-->
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>

</html>
