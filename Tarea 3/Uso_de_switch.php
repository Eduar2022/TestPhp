<?php
if($_POST){

    $boton=$_POST['btnValor'];
    
    switch($boton){
        case 1: 
                echo "PresionĂ³ el boton 1";
        break;
        
        case 2:
                echo "PresionĂ³ el boton 2";
        break;
        case 3:
                echo "PresionĂ³ el boton 3";
        break;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>

    <form action="uso_de_switch.php" method="post">

    <input type="submit" name="btnValor" value="1">
    <br/>
    <input type="submit" name="btnValor" value="2">
    <br/>
    <input type="submit" name="btnValor" value="3">

    </form>

</head>
<body>
    
</body>
</html>