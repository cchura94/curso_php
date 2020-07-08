<?php

class Persona
{
    //Atributos o propiedades
    private $nombre;
    private $apellido;
    private $edad;

    // Contructor
    public function __construct($n, $ap, $e) {
        $this->nombre = $n;
        $this->apellido = $ap;
        $this->edad = $e;
        
    }

    //Metodos (funciones)
    public function mostrar()
    {
        echo "Nombre: $this->nombre, Apellido: $this->apellido, Edad: $this->edad <br>";
    }

}



//Instanciar un objeto Persona
$p1 = new Persona("Juan", "Perez", 30);
$p2 = new Persona("Oscar", "Paredes", 35);
$p3 = new Persona("Pedro", "Quispe", 10);
$p4 = new Persona("Maria", "Caceres", 40);
$p5 = new Persona("Carlos", "Sanchez", 38);
$p1->mostrar();
$p2->mostrar();
$p3->mostrar();
$p4->mostrar();
$p5->mostrar();
