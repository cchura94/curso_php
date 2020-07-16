<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Categoria.php");


    $c = new Categoria;
    $datos = $c->lista();

    if($_POST){
        //eliminar
        $id = $_POST['id'];
        $c->eliminar($id);
    }
?>
<a href="./nuevo.php" class="btn btn-primary">Nueva Categoria</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>DESCRIPCION</td>
            <td>ACCIONES</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($datos as $cat){ ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['nombre'] ?></td>
            <td><?= $cat['descripcion'] ?></td>
            <td>
                <a href="./editar.php?id=<?= $cat['id'] ?>" class="btn btn-warning">editar</a>
            
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal<?= $cat['id'] ?>">
  eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="Modal<?= $cat['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro de eliminar la Categoria?
        <hr>
        <p><?= $cat['nombre'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $cat['id'] ?>">
            <button type="submit" class="btn btn-primary">ELIMINAR</button>
        </form>        
      </div>
    </div>
  </div>
</div>


            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>


<?php
require_once("./../../../layouts/pie.php");
?>