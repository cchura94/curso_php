
<?php
require_once("./../../../layouts/cabecera.php");
require_once("./../../../models/Usuario.php");
if($_POST){
    $nom = $_POST['nombre'];
    $co = $_POST['correo'];
    $clave = $_POST['clave'];

    $u = new Usuario;
    $u->guardar($nom, $co, $clave);
    header("Location: ./lista.php");
}

?>

<div class="row">
    <div class="col-md-6">

    <form action="" method="post">
<label for="">Nombre:</label>
    <input type="text" name="nombre" class="form-control">
    <br>
    <label for="">Correo:</label>
    <input type="email" name="correo" class="form-control">
    <br>
    <label for="">Contraseña:</label>
    <input type="password" name="clave" class="form-control">
     <br>
     <input type="submit">
</form>
    
    </div>
</div>

<?php
require_once("./../../../layouts/pie.php");
?>