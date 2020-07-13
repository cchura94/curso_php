<?php
session_start();
if(!isset($_SESSION["auth"])){
    header("Location: ./../../login.php");
}

require_once("./../../layouts/cabecera.php");
?>

<h1>ADMINISTRADOR</h1>





<?php
require_once("./../../layouts/pie.php");
?>

