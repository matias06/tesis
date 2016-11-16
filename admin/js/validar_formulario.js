$(document).ready(function(){

	$.validator.addMethod('validarRun', function(value, element){
        return this.optional(element) || /^([0-9])+([kK0-9])+$/.test(value);
    })

	$('#formularioRegistro').validate({
		rules:{
			txt_run:{
				required:true,
				validarRun: true,
				minlength: 9,
				maxlength:10
			}
		},
		nombre: {
                required: true,
                maxlength:15
            },
		messages:{
			txt_run:{
				required:"Favor de ingresar valores",
				minlength:"Favor ingresar mínimo 9 caracteres.",
				maxlength:"Favor ingresar un máximo de 10 caracteres"
			}
		},


	
	});

	$("#btn_insert").on('click',function(){

        if(formulario.form())
        {
            swal("Operacion realizada con exito", "Registro guardado!!!", "success");
           
        }

    });
})