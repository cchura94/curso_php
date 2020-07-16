<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Usuario.php");
if($_POST){
    //MODIFICAR
    $id = $_GET['id'];
    $nom = $_POST['nombre'];
    $co = $_POST['correo'];
    $clave = $_POST['clave'];

    $u2 = new Usuario;
    $u2->modificar($nom, $co, $clave, $id);
    header("Location: lista.php");
}else{
    //CARGAR DATOS DEL USUARIO
    $id = $_GET['id'];
    $u = new Usuario;
    $usuario = $u->bucarUsuario($id);

}

?>

<div class="row">
    <div class="col-md-6">

<h1>Editar Usuario</h1>

<form action="" method="post">
    <label for="">Nombre:</label>
    <input type="text" name="nombre" class="form-control" value="<?= $usuario['nombre'] ?>">
    <br>
    <label for="">Correo:</label>
    <input type="email" name="correo" class="form-control" value="<?= $usuario['correo'] ?>">
    <br>
    <label for="">Contraseña:</label>
    <input type="hidden" name="clave" class="form-control" value="<?= $usuario['clave'] ?>">
     <br>
     <input type="submit" value="MODIFICAR" class="btn btn-success">
</form>
    
    </div>
</div>

<?php
require_once("./../../../layouts/pie.php");
?>