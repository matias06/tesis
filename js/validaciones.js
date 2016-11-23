                            function validarRun(element){
                                var value= element.value;
                                return this.optional(element) || /^([0-9])+([kK0-9])+$/.test(value);
                                alert("hola");
                            }


$(document).ready(function () {

    //expreciones regulares js
    //http://aprenderaprogramar.com/index.php?option=com_content&view=article&id=835:expresiones-regulares-javascript-regex-new-caracter-especial-numero-letra-espacio-blanco-cu01154e&catid=78:tutorial-basico-programador-web-javascript-desde-&Itemid=206

    //Paso numero 1


    var formulario =  $("#usuariosForm").validate({
        rules: {
            run: {
                required: true,
                validarRun: true,
                minlength:9,
                maxlength:12
            },
            nombre: {
                required: true,
                maxlength:100
            },
            razonsocial: {
                required: true,
                maxlength:100
            },
            giro: {
                required: true,
                 maxlength:100
           
            },
            email: {
                required: true,
                email:true,
                maxlength:50
              
            },
            comuna: {
                required: true,
                maxlength:100
            },
            ciudad: {
                required: true,
                maxlength:100
            },
            direccion: {
                required: true,
                maxlength:100
            }
        },
        messages: {
            run: {
                required: "Este campo es requerido",
                validarRun:"Revise su Rut",
                minlength:"Faltan Digitos",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            nombre: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            razonsocial: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            giro: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            email:{
                required: "Este campo es requerido",
                email:"Ingrese un email valido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            comuna: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            ciudad: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            },
            direccion: {
                required: "Este campo es requerido",
                maxlength:"Excede el maximo de digitos permitidos"
            }
        }
    });

 //Paso numero 2
    $("#btn_registrar").on('click',function(){

        if(formulario.form())
        {
            swal("Operacion realizada con exito", "Registro guardado!!!", "success");
           
        }

    });


}