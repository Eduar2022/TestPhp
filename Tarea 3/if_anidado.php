<?php
if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB']; 
    
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $division = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$division;
    echo "<br/>".$multiplicacion;

    if ($valorA==$valorB){

        echo "<br/>El valor de A es mayor que el valor de B <br/>";

        if($valorA==4){
            echo" El valor es 4";
        }
        if($valorA==5){
            echo" El valor es 5";
        }

    }
    if( ($valorA==$valorB) && ($valorA==4) ){

        echo "El valor de A es igual a B  es un numero 4";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_anidado.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
    </form>

</body>
</html>

