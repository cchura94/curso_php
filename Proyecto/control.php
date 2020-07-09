<?php
if($_POST){
    $c = $_POST['correo'];
    $p = $_POST['clave'];

    if($c == "cchura.cpc@gmail.com" && $p == "admin123"){
        header("Location: ./vistas/admin/index.php");
    }else{
        $error = "Usuario incorrecto";
        header("Location: ./login.php?error=$error");
    }

}
?>