<?php
   	session_start();
    // Llamo a la clase trabajar con ella
    require_once('../clases/Cotizacion.php');
    // Instancio la clase para usar sus metodos
    $cotizacion = new Cotizacion;
   // Rut de la persona que inicio sesion
    $rut = 18804398-4;
?>
<!-- Volver -->
<h1 class="panelVolver" id="volverCotizacion"><span class="icon-volver"></span></h1>

<!-- Contenedor de formulario -->
<div class="contFormulario">
	<header class="headerForm">Cree un nombre para su cotizacion</header>
	<!-- Formulario de ingreso -->
	<form action="#" method="post" class="form">
		<input class="inputsMantenedores" id="inputNombreCotizacion" type="text" required placeholder="Nombre de su cotizacion">
		<input class="botonFormulario" type="button" value="Continuar" onclick='crearNombreCotizacion();'>
	</form>
<!-- Termina formulario -->
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



function crearNombreCotizacion(){
		// Guardo las variables
		var nombre = $('#inputNombreCotizacion').val();

						// Seteo las variables para enviarlas por ajax
		       			var datos ='nombre=' + nombre +
		       					   '&rut=' + <?php echo $rut?>;

                            $.ajax({
		                        // Envio datos por ajax
		                        url:'../../controlador/agregarController/agregarNombreCotizacionController.php',
		                        method: 'POST',
		                        data: datos,
		                        success:function(msg){
		                        		// .trim() para quitar espacios de lo que recibo por php
		                        		if(msg.trim() == 'existe'){
		                        			//
		                        		 	alertify.error('Ya existe una cotizacion con este nombre. \n Intente con otro.');
		                        		}else if(msg.trim() == 'creado'){
		                        			// Redirecciono, y paso el rut
		                        			alertify.success('Cotizacion creada');
		                        			$('.contenido').load('precargasAdm/mantenedorCotizacion/verProductos.php?rut='+<?php echo $rut?>);
		                    			}
		                        },
		                        error:function(){
		                        	// Error en caso que existan problemas con la BD
		                            alertify.error('Error');
		                        }
		                    });//Termina ajax

	}

// Detecto la tecla enter
$('#inputNombreCotizacion').keydown(function(e){
    if(e.keyCode == 13){
    	e.preventDefault();
        crearNombreCotizacion();
    }
})
</script>
