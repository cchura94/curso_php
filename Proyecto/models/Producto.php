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

    public function guardar($nom, $cant, $precio, $imagen, $des, $cat_id)
    {
        $sql = "INSERT into productos (nombre, cantidad, precio, imagen, descripcion, categoria_id, proveedor_id) values('$nom', $cant,$precio, '$imagen', '$des', $cat_id, 1)";
        Conexion::consultaSimple($sql);
    }

    public function mostrar($id)
    {
        $sql = "SELECT * from productos where id = $id";
        $categoria = Conexion::consultaRetorno($sql);
        return $categoria->fetchAll()[0];
    }

    public function modificar($nom, $cant, $precio, $imagen, $des, $cat_id, $id)
    {
        $sql = "UPDATE productos set nombre = '$nom', cantidad=$cant, precio=$precio, imagen='$imagen', descripcion = '$des', categoria_id = $cat_id where id = $id";
        Conexion::consultaSimple($sql);
    }

    public function eliminar($id)
    {
        $sql = "DELETE from productos where id = $id";
        Conexion::consultaSimple($sql);
    }

}


