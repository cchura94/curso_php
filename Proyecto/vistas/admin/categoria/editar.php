<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Categoria.php");
    
$c = new Categoria;    
$id = $_GET['id'];

if($_POST){
    $n = $_POST["nombre"];
    $d = $_POST["descripcion"];    
    $c->modificar($n, $d, $id);

    header("Location: ./index.php");
}else{
    $cate = $c->mostrar($id);
}
?>

<div class="row">
    <div class="col-md-6">
        <h1>EDITAR Categoria</h1>

        <form action="" method="post">
            <label for="">NOMBRE CATEGORIA:</label>
            <input type="text" name="nombre" class="form-control" value="<?= $cate['nombre'] ?>" placeholder="Ingrese el nombre de la categoria">
            <label for="">DESCRIPCION CATEGORIA:</label>
            <textarea name="descripcion" name="descripcion" class="form-control"><?= $cate['descripcion'] ?></textarea>
            <input type="submit" class="btn btn-success" value="MODIFICAR">
        </form>
    </div>
</div>

<?php
require_once("./../../../layouts/pie.php");
?>
