<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro_persona.php" method="post">
    <label for="uname">Id: </label><input type="text" name="id" id="">
    <br/>
    <label for="uname">Nombre: </label><input type="text" name="nombre" id="">
    <br/>
    <label for="uname">Apellido: </label><input type="text" name="apellido" id="">
    <br/>
    <label for="uname">Direccion: </label><input type="text" name="direccion" id="">
    <br/>
    <label for="uname">Edad: </label><input type="text" name="edad" id="">
    <br/>
    <input type="submit" name ="enviar" value="Enviar">
    </form>
    <form action="Mostrar_datos.php" method="get">
    <input type="submit" value="Mostrar datos">
    </form>
    <form action="Mostrar_por_id.php" method="get">
    <label for="uname">Id: </label><input type="text" name="idUsuario" id="">
    <input type="submit" value="Buscar">
    </form>

</body>
</html>
