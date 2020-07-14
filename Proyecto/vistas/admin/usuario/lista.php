
<?php
require_once("./../../../models/Usuario.php");

    $u = new Usuario;
    $datos = $u->lista();

?>


<?php
require_once("./../../../layouts/cabecera.php");
?>
<a href="./nuevo.php">Nuevo Usuario</a>
<table border="1">
<tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>CORREO</td>
    <td>ACCIONES</td>
</tr>
<?php 
foreach($datos as $us){  
?>

<tr>
    <td><?= $us['id'] ?></td>
    <td><?= $us['nombre'] ?></td>
    <td><?= $us['correo'] ?></td>
    <td>ACCIONES</td>
</tr>
<?php } ?>
</table>
<?php
require_once("./../../../layouts/pie.php");
?>