<?php

$dir_root = $_SERVER['DOCUMENT_ROOT'];

require_once($dir_root."/php/Proyecto/models/Conexion.php");

class Producto extends Conexion
{
    public function lista()
    {
        $sql = "SELECT * from productos";
        return  Conexion::consultaRetorno($sql);
    }

    public function guardar($nom, $cant, $precio, $imagen, $des)
    {
        $sql = "INSERT into productos (nombre, cantidad,precio, imagen, descripcion) values('$nom', $cant,$precio, '$imagen', '$des')";
        Conexion::consultaSimple($sql);
    }

    public function mostrar($id)
    {
        $sql = "SELECT * from productos where id = $id";
        $categoria = Conexion::consultaRetorno($sql);
        return $categoria->fetchAll()[0];
    }

    public function modificar($nom, $cant, $precio, $imagen, $des, $id)
    {
        $sql = "UPDATE productos set nombre = '$nom', cantidad=$cant, precio=$precio, imagen='$imagen', descripcion = '$des' where id = $id";
        Conexion::consultaSimple($sql);
    }

    public function eliminar($id)
    {
        $sql = "DELETE from productos where id = $id";
        Conexion::consultaSimple($sql);
    }

}


