<?php
if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB']; 

    if ($valorA != $valorB || ($valorA > $valorB) ){

        echo "El numero ".$valorA." Es diferente de el numero ".$valorB." y tambien es mayor";
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
    <form action="Operadores_logicos.php" method="post">
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
