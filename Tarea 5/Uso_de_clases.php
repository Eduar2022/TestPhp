<?php

class Persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura; 

    public function asignarNombre($nuevoNombre){ //aciciones o métodos...

        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){

        echo "Mi nombre es ".$this->nombre;
    }
    public function mostrarEdad(){
        $this-> edad = 22;
        return $this-> edad;
    }
}

$objAlumno = new Persona(); // instacia o creación de un objeto
$objAlumno->asignarNombre("Eduard"."<br/>"); // llamando un método

echo $objAlumno->nombre; //Imprimir una propiedad

$objAlumno2 = new Persona();
$objAlumno2->asignarNombre("Daphne"."<br/>");
$objAlumno->imprimirNombre();
$objAlumno2->imprimirNombre();

$objAlumno3 = new Persona();

echo $objAlumno3->mostrarEdad(); //private


?>