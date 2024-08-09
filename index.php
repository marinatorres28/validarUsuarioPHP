<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validar usuario y contraseña</title>
</head>
<body>
<div>
    <h1>Validar Acceso</h1>
    <form action="inicioSesion2.php" method="post">

    <div>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
    </div>

    <div>
        <label for="password">Contraseña:</label>
        <input type="text" name="password" id="password">
    </div>

    <input type="submit" value="Enviar">

    <?php
    // si mensaje no esta vacio, sacamos el mensaje que corresponda
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>

</form>
</div>
</body>
</html>
<?php
