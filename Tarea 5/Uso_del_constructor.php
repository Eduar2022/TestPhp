<?php

class Persona{

    public $nombre; // propiedades
    public $edad;
    protected $altura; 


    function __construct($nuevoNombre, $nuevaEdad){

        $this->nombre = $nuevoNombre;
        $this->edad = $nuevaEdad;
    }

    public function asignarNombre($nuevoNombre){ //acciones o métodos...

        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){

        echo "Mi nombre es ".$this->nombre." y tengo ".$this->edad." años"."<br/>";
    }
    public function mostrarEdad(){
        $this-> edad = 22;
        return $this-> edad;
    }
}

$objAlumno = new Persona("Eduard", 22); // Creacion de un objeto con los atributos mediante un constructor
//$objAlumno->asignarNombre("Eduard"."<br/>"); // llamando un método
$objAlumno->imprimirNombre();

$objAlumno2 = new Persona("Daphne", 17);
$objAlumno2->imprimirNombre();

$objAlumno3 = new Persona("Adri", 20);
$objAlumno3->imprimirNombre();


?>