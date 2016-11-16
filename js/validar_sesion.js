$(document).ready(function(){
	$('#txt_username').blur(function(){
		console.log("Validando User : "+$(this).val());

	});
	$('#combo_ciudad').change(function(){
		console.log($(this).val());
	});
	$('#inicio_sesion').validate({
		rules:{
			run_usuario:{
				required:true,
				minlength: 9,
                maxlength: 10
			},
			password_usuario:{
				required:true,
				min:0,
				maxlength:100
			},
			
		},
		messages:{
			run_usuario:{
				required:"Favor de ingresar Run",
				minlength:"Favor ingresar mínimo 9 caracteres."
			},
			messages:{
				required:"Error, requerido",
				min:"Mínim"
			}

		},
	submitHandler:function(form){
			/*$.ajax({
				data:$('#frm_validar').serialize(),
				url:"./destino.php",
				type:"POST",
				beforeSend:function(){
					$('#msg').html("<marquee><h1>Procesando...</h1></marquee>");
				},
				success:function(x){
					console.log(x);
				}
			});*/
			console.log($('#inicio_sesion').serialize());
			return false;
		}
	});
});