<?php

$num = 1;


/*for ($i=1; $i<=100; $i++){
    echo "<br>";
    echo $i;
}*/

$arreglo = ["nombre"=>"Eduardo", "Maria", true, 10.5, 2];

/*var_dump($arreglo);
echo "<br>";
print_r($arreglo["nombre"]);*/

/*foreach ($arreglo as $value){
    echo "<br>";
    var_dump($value);
}*/

foreach ($arreglo as $key => $value){
    echo "<br>";
    var_dump($arreglo [$key], $value);
}