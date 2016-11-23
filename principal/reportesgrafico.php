<?php
	include '../comun/comun.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<?php cargarHeader(); ?>
<title>Reportes</title>
</head>
   
<body>
    
	<header>
		<?php cargarMenu(); ?>
	</header>	

	

	<div class="container">
		<br>
		<h3>Reportes</h3>
		
				<div class="row">
							<div class="col-md-12">
								<div role="tabpanel">
<!-- Botones o etiquetas del panel principal -->
		<ul class="nav nav-tabs" role="tablist"> 
			<li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Stock de productos</a></li>
			<li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Ingresos diarios</a></li>
			<li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Ingresos mensuales</a></li>
			<!-- <li role="presentation"><a href="#seccion4" aria-controls="seccion4" data-toggle="tab" role="tab">Stock bodega</a></li>  -->
			<li role="presentation" class="dropdown">
				<a href="#" class="dropdown-togle" data-toggle="dropdown">Stock bodega
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
						   <li><a href="#">Ampolletas</a></li>
                           <li><a href="#">Amplificación</a></li>
                           <li><a href="#">Rodaminetos</a></li>
                           <li><a href="#">Fusibles</a></li>
                           </ul>
			</li>
 		</ul>
			
	<div class="tab-content">
									<!-- Comienzo reporte 1 -->
		<div role="tabpanel" class="tab-pane active" id="seccion1">
			<h3>Stock de productos</h3>
	


		
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Venta de productos',
            x: -20 //center
        },
        subtitle: {
            text: 'Figuesep',
            x: -20
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Productos'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Intalaciones',
            data: [7.0, 6.9, 19.5, 14.15, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Venta repuestos',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Lavados',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.5, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }]
    });
});
		</script>
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
				
					<div class="container">
						<div class="table-responsive">
								
										

						</div>	

					</div>
										
		</div>
	
					
									<!-- Comienzo reporte 2 -->
									<div role="tabpanel" class="tab-pane" id="seccion2">
										<h3>Ingresos diarios</h3>
										<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
				
									<div class="container">
										<div class="table-responsive">
										
										</div>

										<div class="container">
										<div class="col-md-4">
											<button class="btn btn-success">Imprimir</button>
											
										</div>
										</div>
									</div>	
									</div>
									
									<!-- Comienzo reporte 3 -->
									<div role="tabpanel" class="tab-pane" id="seccion3">
										<h3>Ingresos mensuales</h3>
										<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
										
									<div class="container">
										<div class="table-responsive">
										
										</div>
									<div class="container">
									<div class="col-md-4">
											<button class="btn btn-success">Imprimir</button>
											
										</div>
										</div>
	
									</div>	
									</div>
									
	<!-- Comienzo reporte 4 -->
	<div role="tabpanel" class="tab-pane" id="seccion4">
										<h3>Stock bodega</h3>	
										<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div class="container">
					<div class="table-responsive">
							
					</div>
					<div class="container">
									<div class="col-md-4">
											<button class="btn btn-success">Imprimir</button>
											
									</div>
					</div>
			</div>	
									</div>
								
	</div>
	<!-- Fin tabpanel -->
					</div>
				</div>
		</div>
					
	</div>



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jqueryLab.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script type="js/highcharts.js"></script>
	<script type="js/highexporting.js"></script>
	
	



</body>

</html>