<?php

$dir_root = $_SERVER['DOCUMENT_ROOT'];

require_once($dir_root."/php/Proyecto/models/Conexion.php");

class Categoria extends Conexion
{
    public function lista()
    {
        $sql = "SELECT * from categorias";
        return  Conexion::consultaRetorno($sql);
    }

    public function guardar($nom, $desc)
    {
        $sql = "INSERT into categorias (nombre, descripcion) values('$nom', '$desc')";
        Conexion::consultaSimple($sql);
    }

    public function mostrar($id)
    {
        $sql = "SELECT * from categorias where id = $id";
        $categoria = Conexion::consultaRetorno($sql);
        return $categoria->fetchAll()[0];
    }

    public function modificar($nom, $desc, $id)
    {
        $sql = "UPDATE categorias set nombre = '$nom', descripcion = '$desc' where id = $id";
        Conexion::consultaSimple($sql);
    }

    public function eliminar($id)
    {
        $sql = "DELETE from categorias where id = $id";
        Conexion::consultaSimple($sql);
    }

}


