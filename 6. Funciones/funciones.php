<?php
//Funcion simple
function saludo()
{
    echo "Hola Mundo desde php";
}

//Funcion con retorno de datos
function saludo2()
{
    return "Saludo 2";
}

//Funcion con parametros de entrada de datos
function suma($n1 = 0, $n2 = 0)
{
    return $n1 + $n2;
}

/*
saludo();
echo saludo2();
echo "<hr>";
echo suma(15, 5);
*/


?>