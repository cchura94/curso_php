<?php

class Conexion{
    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=registrosphp", "root", "");
    }

    //Insert, Update, Delete
    public function consultaSimple($sql)
    {
        $this->con->query($sql);
    }

    // Select
    public function consultaRetorno($sql)
    {
        return $this->con->query($sql);
    }
}


/*
//Prueba
$c = new Conexion;
//$c->consultaSimple("insert into usuarios (nombre, correo, clave) values('Cristian', 'cchura.cpc@gmail.com', 'cristian123')");
$datos = $c->consultaRetorno("select * from usuarios");

//print_r($datos);
foreach($datos as $fila){
    echo "<hr>";
    print_r($fila);
}*/

