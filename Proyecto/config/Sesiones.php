<?php

class Sesiones
{
    public function __construct() {
        session_start();
    }

    public function crear_sesion($correo)
    {
        $_SESSION["auth"] = "si";
        $_SESSION["usuario"] = $correo;
    }

    public function cerrar_sesion()
    {
        session_destroy();
    }
}


