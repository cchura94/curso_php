<?php
$dir_root = $_SERVER['DOCUMENT_ROOT'];

require_once($dir_root."/php/Proyecto/models/Conexion.php");

class Usuario extends Conexion
{
    public function lista()
    {
        $sql = "SELECT * from usuarios";
        return  Conexion::consultaRetorno($sql);

    }

    public function bucarUsuario($id)
    {
        $sql = "SELECT * from usuarios where id = $id";
        $usuario = Conexion::consultaRetorno($sql);
        return $usuario->fetchAll()[0];
    }

    public function guardar($nom, $co, $clave)
    {
        $sql = "INSERT into usuarios (nombre, correo, clave) values('$nom', '$co', '$clave')";
    
        Conexion::consultaSimple($sql);
    }

    public function modificar($nom, $co, $clave, $id)
    {
        $sql = "UPDATE usuarios set nombre='$nom', correo = '$co', clave = '$clave' where id = $id";
        
        Conexion::consultaSimple($sql);
    }

    public function eliminar($id)
    {
        $sql = "INSERT into usuarios (nombre, correo, clave) values('$nom', '$co', '$clave')";
        Conexion::consultaSimple($sql);
    }

    public function verificar($u, $p)
    {
        $sql = "SELECT * from usuarios where correo = '$u' and clave = '$p'";
        $usuario = Conexion::consultaRetorno($sql);

        if(count($usuario->fetchAll()) > 0){
            return true;
        }else{
            return false;
        }
    }
}
