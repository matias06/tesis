<?php
function catalogo(){
    include_once("../clases/claseCategoriaProducto.php");
    include_once("../clases/claseSubCatProducto.php");
    include_once("../clases/claseProductos.php");
    $subcategoria = new SubCatProducto();
    $categp = new CategoriaProducto();
    $producto = new Productos();
    $categoria = $categp->listarCategoriaProducto();
          $contador = 0;
          foreach($categoria as $vercategoria){
          $categorias = $vercategoria['id_categoria_producto'];
          $descategoria = $vercategoria['descripcion_categoria_producto'];
          $contador++;
              echo '
              <div class="row">

              <div class="col-xs-12 contenido-categoria cb';
              echo $contador;
              echo'" style="margin-top:3rem;"> <!--contenido-principal-->';
                  echo '<div class="col-xs-12 col-sm-6 col-md-3">
                        <span class="lead titulo-categoria text-center c';echo $contador; echo'">'; echo $descategoria.'</span>              <hr>
                                <ul class="nav nav-pills nav-stacked">';
                                  $subcatpro = $subcategoria->listarSubCatProducto($categorias);
                                  foreach($subcatpro as $versubcategoria){
                                  $idsubcategorias = $versubcategoria['id_subcategoria_producto'];
                                  $descsubcategoria = $versubcategoria['descripcion_subcategoria_producto'];
                                  echo '
                                        <li><a href="catalogo_2.php?id='.$idsubcategorias.'&categoria='.$categorias.'" >'; echo $descsubcategoria.'</a></li>';
                                      }
                                  echo  '</ul>
                          </div>
                    <div class="col-xs-12 col-sm-6 col-md-9">';
                    $listap = $producto->listar_producto_x_categoria($categorias);
                    foreach($listap as $verproducto){?>
                    <div class="well well-cw col-xs-12 col-md-4 col-lg-3">
                        <a href="#">
                            <img src="../imagenes/productos/<?php echo $verproducto['imagen']; ?>" class="img-responsive" alt="<?php echo $verproducto['descripcion_producto']; ?>">
                            <span><?php echo $verproducto['descripcion_producto'].", valor $".$verproducto['valor_producto']; ?></span>
                          </a>
                    </div>
                      <?php }
                      echo '</div>
                    </div> </div>';
                      }

}

function cargarProductoxCategoria(){
  include_once("../clases/claseProductos.php");
  $producto = new Productos();
  $id = $_REQUEST['id'];
  $categoria = $_REQUEST['categoria'];
  $listap = $producto->listar_producto_x_subcategoria($categoria,$id);
  foreach($listap as $verproducto){
    ?>

    <div class="well well-cw col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <a href="#">
            <img src="../imagenes/productos/<?php echo $verproducto['imagen']; ?>" class="img-responsive" alt="<?php echo $verproducto['descripcion_producto']; ?>">
            <span><?php echo $verproducto['descripcion_producto'].", valor $".$verproducto['valor_producto']; ?></span>
        </a>
    </div>
    <?php }
}
?>
