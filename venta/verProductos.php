<?php
	session_start();
	$rut = 18804398-4;
    // Llamo a la clase trabajar con ella
    require_once('../clases/Cotizacion.php');
    require_once('../clases/claseCategoriaProducto.php');
    require_once('../clases/claseProductos.php');
    // Instancio la clase para usar sus metodos
    $cotizacion = new Cotizacion;
    $categoria = new CategoriaProducto;
    $producto = new Productos;

?>
<!-- Volver -->
<h1 class="panelVolver" id="volverCotizacion"><span class="icon-volver"></span></h1>

<!-- Contenedor de formulario -->
<div class="contFormulario">

	<!-- Formulario de ingreso -->
	<form action="#" method="post" class="form">
		<?php $categoria->llenarComboCategoriaProducto(); ?>

		<!-- Aca se cargara todo -->
		<div class="contenedorCotizacion">
		 <?php $producto->mostrarTodosProductos();?>
		</div>
		<!-- Termina carga -->

	</form>
<!-- Termina formulario -->
</div>
<!-- Termina contenedor -->
<script>

// Cambio de categoria
$('select[name*=idCategoria]').on('change',function(){
	// Paso el valor del combo
	var id = $(this).val();
		// Paso el valor por ajax
			$.ajax({
			  type: 'POST',
			  url: '../../controlador/cargarProductosController.php',
			  data: {id:id},
			  success: function(msg){
			  	$('.contenedorCotizacion').html(msg);
			  }
			});
});


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


// Ver detalle producto
function verDetalle(id){
	var idDetalle = id;
	$('.contenido').load('precargasAdm/mantenedorCotizacion/detalleProducto.php?id='+idDetalle);
}
</script>
