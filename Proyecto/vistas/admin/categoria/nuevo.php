<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Categoria.php");
    $c = new Categoria;
    

if($_POST){
    $n = $_POST["nombre"];
    $d = $_POST["descripcion"];    
    $c->guardar($n, $d);

    //header("Location: index.php");
    header("Location: /index.php");
}
?>

<div class="row">
    <div class="col-md-6">
        <h1>Nueva Categoria</h1>

        <form action="" method="post">
            <label for="">NOMBRE CATEGORIA:</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la categoria">
            <label for="">DESCRIPCION CATEGORIA:</label>
            <textarea name="descripcion" name="descripcion" class="form-control"></textarea>
            <input type="submit" class="btn btn-success">
        </form>
    </div>
</div>

<?php
require_once("./../../../layouts/pie.php");
?>
