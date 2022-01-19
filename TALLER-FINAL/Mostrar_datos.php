
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'conexion.php';
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Edad</th>
        </tr>
        </thead>
        <?php foreach($conexion->query("SELECT * from personas") as $row){?>
        <tr>
            <td><?php echo $row ["id"] ?></td>
            <td><?php echo $row ["nombre"] ?></td>
            <td><?php echo $row ["apellido"] ?></td>
            <td><?php echo $row ["direccion"] ?></td>
            <td><?php echo $row ["edad"] ?></td>
        </tr>
        <?php }?>
</table>

</body> 
</html>