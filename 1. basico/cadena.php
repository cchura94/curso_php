<?php
$cadena = "Esta es una Cadena";
echo $cadena;
echo "<br>";
var_dump($cadena);

echo "<hr>";
$mensaje = 'Esta linea es otra cadena';
echo $mensaje;
echo "<br>";
var_dump($mensaje);

echo "<hr>";
$mensaje2 = "Curso de \"progración\" con PHP";
echo $mensaje2;
echo "<hr>";

$backend = "Las tecnologias backend son: 'PHP', 'JS', 'PYTHON' ";
echo $backend;

echo "<hr>";

$backend = 'Las tecnologias backend son: "PHP", "JS", "PYTHON" ';
echo $backend;

echo "<hr>";
$sql = "SELECT * FROM usuarios";
$sql2 = "insert into usuarios (correo, clave) values ('cchura.cpc@gmail.com', 'cristian123')";
echo $sql2;

echo "<hr>";

$lenguaje = "PHP";
$etiqueta = "HTML";
$numero = 10;

// Lenguaje de programación PHP junto a HTML
echo "Lenguaje de programación " . $lenguaje .  " junto a " . $etiqueta . $numero;
echo "<hr>";
echo "Lenguaje de programación $lenguaje junto a $etiqueta $numero";

?>