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

<?php
    require_once '../clases/Conexion.php';
    $conexion = new Conexion();
    $conexion->consultarSesion();
?>
<br><br><br>
<!-- <div class="fondoCalendario">
<div class="container-fluid"> -->
<div class="container">
               <div class="col-md-10-centered">
                   <div class="panel panel-default">
                       <div class="panel-heading">
                               <h3 class="panel-title">Seleccione fecha de compra</h3>

                       </div>
                           <div class="panel-body">

  <form class="" id="form_calendario" action="" method="post">
    <div style="animation-delay: 0.5s;" class="col-md-3 animated-panel zoomIn">
         <div class="form-group">
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
     </div>

    <div style="animation-delay: 0.2s;" class="col-md-3 animated-panel zoomIn">
        <div class="form-group">
            <label for="apellido">Fecha</label>
            <input class="form-control" required title="Debe ingresar fecha" required id="fecha" name="fecha" placeholder="" type="date">
        </div>
    </div>
    <br>
    <input type="submit" id="btn_insert" class="btn btn-success" value="Agregar" name="btn_registrar" >
  </div>

</form>
</div>
</div>
</div>
 </div> <!-- cierre del contenedor (proveedor, fecha) -->


<div class="" id="divFormularioDetalleCompra">

</div>




</body>
</html>
<script>



    function cargarTablaDetalle(){
      $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

          url:"../mantenedores/mantenedoresIngresar.php?mant=11&func=3", //donde se va a ingresar "mantenedoresIngresar.php"
          data:$("#form_calendario").serialize(),
          success:function(respuesta){
                alert(respuesta);
               $("#divFormularioDetalleCompra").html(respuesta);
              }
      });
    }


$("#form_calendario").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario


       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=11&func=1", //donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#form_calendario").serialize(),
           success:function(respuesta){
                    alert(respuesta);

                    $(document).ready(function(){

                      cargarTablaDetalle();
                    });
               }
       });
       return false;
});


$("#formularioCompra").submit(function(){//captura cuando se envia el formulario
   event.preventDefault();//detiene el envio del formulario

       $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina

           url:"../mantenedores/mantenedoresIngresar.php?mant=11&func=2", //donde se va a ingresar "mantenedoresIngresar.php"
           data:$("#formularioCompra").serialize(),
           success:function(respuesta){
                    alert(respuesta);

                      cargarTablaDetalle();

               }
       });
});



</script>
