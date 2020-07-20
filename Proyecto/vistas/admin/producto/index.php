<?php
require_once("./../../../layouts/cabecera.php");

require_once("./../../../models/Producto.php");

$p = new Producto;


if(isset($_GET['buscar'])){
    $b = $_GET['buscar'];
    $productos = $p->buscar($b);
}else{
    $productos = $p->lista();
}

?>

<a href="./nuevo.php" class="btn btn-primary">Nuevo Producto</a>
<a href="./lista-reporte.php" target="_blank" class="btn btn-info">Generar Reporte Producto</a>

<form action="" method="get">
    <input type="search" name="buscar">
    <input type="submit" value="buscar" class="btn btn-success btn-xs">
</form>

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>IMAGEN</th>
                    <th>DESCRIPCION</th>
                    <th>CATEGORIA</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($productos as $prod) {?>
                <tr>
                    <td><?= $prod['id'] ?></td>
                    <td><?= $prod['nombre'] ?></td>
                    <td><?= $prod['precio'] ?></td>
                    <td><?= $prod['cantidad'] ?></td>
                    <td>
                        <a href="/php/Proyecto<?= $prod['imagen'] ?>" target="_blank">
                        <img src="/php/Proyecto<?= $prod['imagen'] ?>" width="100px" alt="">
                        </a>
                    </td>
                    <td><?= $prod['descripcion'] ?></td>
                    <td><?= $prod['categoria_id'] ?></td>
                    <td>
                        <a href="./editar.php?id=<?= $prod['id'] ?>">editar</a>
                        <a href="./pdf_imp.php?id=<?= $prod['id'] ?>">imprimir</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        
        </table>
    </div>
</div>


<?php
require_once("./../../../layouts/pie.php");
?>