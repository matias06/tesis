<?php
   // Llamo a la clase usuario para trabajar con ella
    require_once('../../../../modelo/Cotizacion.php');
    // Instancio la clase para usar sus metodos
    $cotizacion = new Cotizacion;
   // Id de la cotizacion con la que se esta trabajando
    $idCotizacion = $_REQUEST['id'];
    // $rutUsuario = $_REQUEST['rut'];
?>
<!-- Volver -->
<h1 class="panelVolver" id="volverCotizacion"><span class="icon-volver"></span></h1>

	<?php $cotizacion->verCotizacionDetalle($idCotizacion);?>

    <?php echo $cotizacion->obtenerTOTAL($idCotizacion); ?>
    <!-- Boton guardar -->
    <a href="../../PDF/CotizacionGenerada.php?id=<?php echo $idCotizacion; ?>&rut=<?php echo $rutUsuario; ?>" target="blank">
        <input type="button" class="botonesCotizacion guardarPDF"  value="Guardar PDF">
    </a>
    <a href="../../PDF/EnviarCotizacion.php?id=<?php echo $idCotizacion; ?>">
        <input type="button" class="botonesCotizacion guardarEnviar" value="Guardar y Enviar PDF">
    </a>
    </div>
    <!-- Termina contenedor -->


<script>
// Declaro variable boton volver
var volver = $('#volverCotizacion');

// Funcion para cargar
function cargarTablaCotizacion(){
    $('.contenido').load('precargasAdm/mantenedorCotizacion/mostrarCotizacion.php');
}
// Volver a la tabla usuarios
volver.click(function(){
	cargarTablaCotizacion();
});


// Cargo la cotizacion en detalle
function recargarCotizacion(id){
    var idCotizacion = id;
    $('.contenido').load('precargasAdm/mantenedorCotizacion/detalleCotizacion.php?id='+idCotizacion);
    // alert(idCotizacion);
}


/*************** PRODUCTO DE LA COTIZACION  ********************/
function eliminarProductoCotizacion(id){
            // Recibo parametro del boton
            var idProducto=id;
            // Ejecuto la funcion
            alertify.confirm("Eliminar producto de la cotizacion?",
                function(){
                    $.ajax({
                        // Envio datos por ajax
                        url:'../../controlador/eliminarController/eliminarProductoCotizacionController.php',
                        method: 'POST',
                        data: {id:idProducto},
                        success:function(){
                            // Recargo tabla, muestro mensaje de eliminado
                           	alertify.success('Producto Eliminado de la Cotización');
                           	recargarCotizacion(<?php echo $idCotizacion; ?>);
                        },
                        error:function(){
                            // Si no se elimina, muestra mensaje
                            alertify.error('No se ha podido eliminar el producto');
                        }
                    });
                },
                function(){
                // Mensaje de cancelado
                    alertify.error('Se canceló la eliminación.');
            }).setting('labels',{'ok':'Eliminar Producto', 'cancel': 'Cancelar'});
}
/*************** ELIMINAR PRODUCTO DE LA COTIZACION ********************/



/*************** Agregar mas productos ********************/
function irAProductos(){
 $('.contenido').load('precargasAdm/mantenedorCotizacion/verProductos.php');
}
/*************** Agregar mas productos ********************/






/*************** Modificar cantidad de productos ********************/
function modificarCantidad(idCoti, idPro){
  var idC = idCoti;
      idP = idPro;

      alertify.prompt('Ingrese una cantidad', '','',
                function(evt, value){
                    $.ajax({
                        // Envio datos por ajax
                        url:'../../controlador/editarController/editarCantidadProductosController.php',
                        method: 'POST',
                        data: {idCotizacion:idC,idProducto:idP,cantidad:value},
                        success:function(){
                            // Recargo tabla, muestro mensaje de eliminado
                            alertify.success('Cantidad Actualizada');
                            recargarCotizacion(<?php echo $idCotizacion; ?>);
                        },
                        error:function(){
                            // Si no se elimina, muestra mensaje
                            alertify.error('Error en la actualizacion');
                        }
                    });
                    // alertify.success('You entered: ' + value);
                }
               , function(){
                  alertify.error('No se ha ingresado una cantidad');
              });
}
/*************** Modificar cantidad de productos ********************/
</script>
