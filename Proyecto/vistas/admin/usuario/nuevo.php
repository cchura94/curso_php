
<?php
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

<form action="" method="post">
<label for="">Nombre:</label>
    <input type="text" name="nombre">
    <br>
    <label for="">Correo:</label>
    <input type="email" name="correo">
    <br>
    <label for="">Contraseña:</label>
    <input type="password" name="clave">
     <br>
     <input type="submit">
</form>