<?php
session_start();
// Rut de la persona que inicio sesion, para filtrar cotizaciones segun este
 $rut = $_SESSION['rut'];
?>

    <!-- Contenedor -->
    <div class="cajaContenido">
         <!-- Cabecera -->
         <div class="cabecera">
                 <p class="tituloCabecera"><span class="icon-Producto"></span> COTIZACIONES</p>
                 <span class="icon-agregar" title="Crear Cotizacion" onclick="cargarFormulario(<?php echo $rut?>);"></span>

         </div>
         <!-- Buscado -->


         <!-- Contenedor contenido dinamico -->
         <div class="contenido"></div>
         <!-- Termina contenedor contenido dinamico -->

    </div>
    <!-- Termina contenedor -->

<script>
// Funcion para cargarUsuarios + buscador
function cargarTablaCotizacion(){
 $('.contenido').load('precargasAdm/mantenedorCotizacion/mostrarCotizacion.php');
}
// Funcion para cargar usuarios
cargarTablaCotizacion();



// Funcion para cargar formulario de agregar, verificamos si existe una cotizacon asociada
function cargarFormulario(rut){
var rutUsuario = rut;
 // Ejecuto ajax para saber si existe una cotizacion asociada al rut
 $.ajax({
     // Envio datos por ajax
     url:'../../controlador/buscarCotizacion.php',
     method: 'POST',
     data: {rut:rutUsuario},
     success:function(msg){
       // .trim() para quitar espacios de lo que recibo por php
       if(msg.trim() == 'notiene'){
         $('.contenido').load('precargasAdm/mantenedorCotizacion/crearNombreCotizacion.php');
       }else if(msg.trim() == 'tiene'){
         // Pregunto si quiere continuar con las que tiene
         alertify.confirm('Aviso!','Desea crear una cotizacion nueva o continuar con las existentes?',function(){
            // Crear una nueva
           $('.contenido').load('precargasAdm/mantenedorCotizacion/crearNombreCotizacion.php');
         },function(){
             // Continuar a ver los productos
            $('.contenido').load('precargasAdm/mantenedorCotizacion/verProductos.php');
         }).setting('labels',{'ok':'Crear Nueva Cotizacion', 'cancel': 'Continuar'});
       }
     },
     error:function(){
      // Error en caso que existan problemas con la BD
      alertify.error('Error fatal :(');
     }
   });//Termina ajax
}
// Funcion para cargar formulario de agregar



</script>
