  <div class="table-responsive">
                                <table class="table table-bordered table-hover table-condensed"> 
                                        <tr class="active danger">
                                            <th>Id</th>
                                            <th>Descripcion categoria</th>
                                            <th>Eliminar Editar </th>
                                        </tr>
                                        
                                        <?php 
                                            require '../clases/claseCategoriaTrabajo.php'; //incluye la clase usuario
                                            $categoriaTrabajo = new CategoriaTrabajo();
                                            $filas = $categoriaTrabajo->listarCategoriaTrabajo();

                                                foreach($filas as $user){
                                         ?>

                                        <tr>
                                            <td><?php echo $user['id_categoria_trabajo']; ?></td>
                                            <td><?php echo $user['descripcion_categoria_trabajo']; ?></td>

                                            <td><button type="button" class="btn btn-default" aria-label="left aling">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

                                            <!--  botones eliminar -->
                                            <button type="button" class="btn btn-danger" onclick="eliminarProductos(\''.$user['id_categoria_trabajo'].'\');" aria-label="left aling">
                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
                                        </tr>
                                        <?php } ?>
                                </table>



                            </div>  

                            <script> function eliminarProductos(id){
                                    // alert(id);

                                     $.ajax({//realiza el envio del formulario pero por ajax para no tener que recargar pagina
                                       
                                        url:"mantenedoresIngresar.php?mant=4&catTrab=3", // donde se va a ingresar "mantenedoresIngresar.php"
                                        data:"id="+id,
                                        success:function(respuesta){
                                                alert(respuesta);
                                                $("#formularioCatTrabajo").html(respuesta);
                                                
                                                cargarDivTablaCatTrabAjo();
                                        }
                                    });
                                }
                                </script>
                          