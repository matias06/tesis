<?php
    session_start();
    // Llamo a la clase trabajar con ella
    require_once('../clases/Cotizacion.php');
    require_once('../clases/claseProducto.php');
    // Instancio la clase para usar sus metodos
    $cotizacion = new Cotizacion;
    $producto = new Producto;

    // Id del producto para ver detalle
    $id = $_REQUEST['id'];
    // Rut de la persona que inicio sesion, para filtrar cotizaciones segun este
    $rut = $_SESSION['rut'];

?>
<!-- Volver -->
<h1 class="panelVolver" id="volverCotizacion"><span class="icon-volver"></span></h1>

    <?php $producto->detalleProducto($id); ?>
    <?php $cotizacion->llenarComboCotizacion();?>

    <!-- Boton agregar -->
    <input type="button" value="Agregar a Cotizacion" class="botonAgregarCotizacion" onclick="agregarACotizacion();">
    </div>
</div>

<script>
// Declaro variable boton volver
var volver = $('#volverCotizacion');

// Funcion para cargar
 function cargarTablaCotizacion(){
    $('.contenido').load('precargasAdm/mantenedorCotizacion/verProductos.php');
}
// Volver a la tabla usuarios
volver.click(function(){
	cargarTablaCotizacion();
});



/************ FUNCION PARA AGREGAR A LA COTIZACION ***************/
function agregarACotizacion(){

            // Guardo las variables
            var idProducto = $('.idProducto').val();
                idCotizacion = $('#comboCotizaciones').val();

                        // Seteo las variables para enviarlas por ajax
                        var datos ='idProducto=' + idProducto +
                                   '&idCotizacion=' + idCotizacion;

                            $.ajax({
                                // Envio datos por ajax
                                url:'../../controlador/agregarController/agregarProductoCotizacionController.php',
                                method: 'POST',
                                data: datos,
                                success:function(msg){
                                    // .trim() para quitar espacios de lo que recibo por php
                                    if(msg.trim() == 'existe'){
                                        // Si el usuario existe, no se crea y se envia mensaje
                                        alertify.error('Este producto ya existe en su cotizacion.');
                                    }else if(msg.trim() == 'agregado'){
                                        // Producto agregado
                                        alertify.success('Producto agregado a la cotizacion');
                                        // Pregunto si quiere continuar con las que tiene
                                        alertify.confirm('Producto agregado!','Que desea hacer?',function(){
                                            // Seguir cotizando
                                            $('.contenido').load('precargasAdm/mantenedorCotizacion/verProductos.php');
                                        },function(){
                                            // Ir a la cotizacion
                                            $('.contenido').load('precargasAdm/mantenedorCotizacion/detalleCotizacion.php?id='+idCotizacion);
                                        }).setting('labels',{'ok':'Seguir Cotizando', 'cancel': 'Ir a la cotización'});
                                    }
                                },
                                error:function(){
                                    // Error en caso que existan problemas con la BD
                                    alertify.error('Error');
                                }
                            });//Termina ajax



}
/************ FUNCION PARA AGREGAR A LA COTIZACION ***************/



</script>
