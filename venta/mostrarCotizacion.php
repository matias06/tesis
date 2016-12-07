<?php
    // Llamo a la clase usuario para trabajar con ella
    require_once('../../../../modelo/Cotizacion.php');
    // Instancio la clase para usar sus metodos
    $cotizacion = new Cotizacion;

?>
<!-- Creo tabla -->
<table class="tablaCotizacion dataTable hover cell-border">
                    <thead>
                        <tr>
                            <th>Nombre Cotizacion</th>
                            <th>Fecha Creacion</th>
                            <th>Usuario que la creó</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Relleno tabla dinamicamente
                        $cotizacion->listarCotizacionVistaAdm();
                    ?>
                    </tbody>
</table>
<script>
$(function(){
    // Inicializo el datatable con los parametros que necesito
    $('.tablaCotizacion').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
          "scrollY": "300px",
          "scrollX": true,
          "scrollCollapse": true,
          "aLengthMenu": [[1, 5, 10, -1], [1, 5, 10, "todos los"]],
          "iDisplayLength": 5
    });
});
/*************** Funcion para cargar tabla ********************/
// Cargo en la tabla, solamente la clase tabla, para no volver a cargar el buscador, por eso el " .tabla "
 function cargarTablaCotizacion(){
    $('.contenido').load('precargasAdm/mantenedorCotizacion/mostrarCotizacion.php');
}
/*************** Funcion para cargar tabla ********************/




/*************** ELIMINAR USUARIO  ********************/
function eliminarCotizacion(id){
            // Recibo parametro del boton
            var idC=id;
            // Ejecuto la funcion
            alertify.confirm("Eliminar Cotizacion?",
                function(){
                    $.ajax({
                        // Envio datos por ajax
                        url:'../../controlador/eliminarController/eliminarCotizacionController.php',
                        method: 'POST',
                        data: {id:idC},
                        success:function(){
                            // Recargo tabla, muestro mensaje de eliminado
                                cargarTablaCotizacion();
                                alertify.success('Cotizacion Eliminada');
                        },
                        error:function(){
                            // Si no se elimina, muestra mensaje
                            alertify.error('Hubo un error en la eliminacion');
                        }
                    });
                },
                function(){
                // Mensaje de cancelado
                    alertify.error('Eliminacion cancelada');
            }).setting('labels',{'ok':'Eliminar Cotizacion', 'cancel': 'Cancelar'});
}
/*************** ELIMINAR USUARIO ********************/




// Cargo en la tabla, solamente la clase tabla, para no volver a cargar el buscador, por eso el " .tabla "
 function verCotizacion(id){
    var idCotizacion = id;
        // rutUsuario = rut;
    $('.contenido').load('precargasAdm/mantenedorCotizacion/detalleCotizacion.php?id='+idCotizacion);
}
// Ir a la cotizacion


</script>
