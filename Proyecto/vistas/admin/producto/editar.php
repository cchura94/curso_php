<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Categoria.php");
require_once("./../../../models/Producto.php");
$prod = new Producto;
$id = $_GET['id'];
$producto = $prod->mostrar($id);

$c = new Categoria;
$categorias = $c->lista();

//GUARDAR PRODUCTO
if($_POST){
    //obteniendo imagen
    $file = $_FILES['imagen']['tmp_name'];
    if (!isset($file))
        $img = "-";
    else
    {
        $nombre_imagen = addslashes($_FILES['imagen']['name']);
        $tamano_imagen = getimagesize($_FILES['imagen']['tmp_name']);

        $ruta= $_SERVER['DOCUMENT_ROOT']."/php/Proyecto/public/img/".$nombre_imagen;
        $direccion="/public/img/".$nombre_imagen;
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

        $img = $direccion;  
    }

    $n = $_POST["nombre"];
    $cant = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $cat_id = $_POST["categoria_id"];    
    $d = $_POST["descripcion"]; 
     

    
    $prod->modificar($n,$cant,$precio,$img,$d, $cat_id, $id);

    //header("Location: /index.php");
    ?>
    <script>
        window.location = "./index.php";
    </script>
<?php
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Editar Producto</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?= $producto['nombre'] ?>">
                <label for="">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" value="<?= $producto['cantidad'] ?>">
                <label for="">Precio:</label>
                <input type="number" step="0.01" name="precio" class="form-control" value="<?= $producto['precio'] ?>">
                <label for="">Imagen:</label>
                <input type="file" name="imagen" class="form-control">
                <label for="">Descripción:</label>
                <textarea name="descripcion" class="form-control"><?= $producto['nombre'] ?></textarea>
                <label for="">Categoria:</label>
                <select name="categoria_id" id="" class="form-control">
                    <option value="">Seleccione una opcion</option>
                    <?php
                    foreach ($categorias as $cat) {
                    ?>
                    <option value="<?= $cat['id'] ?>"><?= $cat['nombre'] ?></option>
                    <?php } ?>
                </select>    

                <input type="submit" value="Guardar Producto" class="btn btn-success">            

            </form>
        </div>
    </div>
</div>


<?php
require_once("./../../../layouts/pie.php");
?>
