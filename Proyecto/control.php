<?php
require_once("./models/Usuario.php");
require_once("./config/Sesiones.php");

if($_POST){
    $c = $_POST['correo'];
    $p = $_POST['clave'];

    $usuario = new Usuario;
    $verif = $usuario->verificar($c, $p);

    if($verif){
        $sesion = new Sesiones;
        $sesion->crear_sesion($c);
        header("Location: ./vistas/admin/index.php");
    }else{
        $error = "Usuario incorrecto";
        header("Location: ./login.php?error=$error");
    }

}
?>