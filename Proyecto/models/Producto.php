<?php
require_once("./../../../models/Conexion.php");

class Producto extends Conexion
{
    public function lista()
    {
        $sql = "SELECT * from productos";
        return  Conexion::consultaRetorno($sql);

    }

    public function guardar($nom, $co, $clave)
    {
        $sql = "INSERT into productos (nombre, correo, clave) values('$nom', '$co', '$clave')";
        Conexion::consultaSimple($sql);
    }

    public function modificar($nom, $co, $clave)
    {
        $sql = "INSERT into usuarios (nombre, correo, clave) values('$nom', '$co', '$clave')";
        Conexion::consultaSimple($sql);
    }

    public function eliminar($id)
    {
        $sql = "INSERT into usuarios (nombre, correo, clave) values('$nom', '$co', '$clave')";
        Conexion::consultaSimple($sql);
    }
}
