<?php

class UnaClase{

    public static function unMetodo(){
        echo "Metodo estatico"."<br/>";
    }

}

$obj = new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo();

?>
