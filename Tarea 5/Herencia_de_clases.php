<?php

use Persona as GlobalPersona;

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
class Trabajador extends Persona{
    public $puesto; //propiedad nueva
    public $sueldo;
    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre.", soy un ".$this->puesto." y gano ".$this->sueldo."<br/>";
    }

}


$objTrabajador = new Trabajador(); // instacia o creación de un objeto
$objTrabajador->asignarNombre("Eduard"); // llamando un método
$objTrabajador->puesto="programador";
$objTrabajador->sueldo= 1000;
$objTrabajador->presentarseComoTrabajador();

$objTrabajador2 = new Trabajador();
$objTrabajador2->asignarNombre("Pepe");
$objTrabajador2->puesto="profesor";
$objTrabajador2->sueldo= 500;
$objTrabajador2->presentarseComoTrabajador();

$objTrabajador3 = new Trabajador();
$objTrabajador3->asignarNombre("Mario");
$objTrabajador3->puesto="Mecanico";
$objTrabajador3->sueldo= 800;
$objTrabajador3->presentarseComoTrabajador();
?>