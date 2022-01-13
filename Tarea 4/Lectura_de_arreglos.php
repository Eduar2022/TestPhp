<?php

$frutas =array("M"=>"Manzana", "F"=>"Fresa", "P"=>"Pera", "N"=>"Naranja");

print_r($frutas);

echo $frutas["M"]."<br/>";

    foreach($frutas as $indice=>$valor){

        echo "El valor ".$valor." Tiene el índice: ".$indice."<br/>";
    }

?>