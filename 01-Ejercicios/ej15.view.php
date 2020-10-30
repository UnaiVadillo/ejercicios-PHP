<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
</head>
<body>
    <p>El nombre es: <?php echo getDatos($diccionario, "usuario1", "nombre") ?></p>
    <p>El apellido es: <?php echo getDatos($diccionario, "usuario1", "apellido") ?></p>
    <p>El email de es: <?php echo getDatos($diccionario, "usuario1", "email") ?></p>
    <br>
    <p>El nombre es: <?php echo getDatos($diccionario, "usuario2", "nombre") ?></p>
    <p>El apellido  es: <?php echo getDatos($diccionario, "usuario2", "apellido") ?></p>
    <p>El email es: <?php echo  getDatos($diccionario, "usuario2", "email") ?></p>
    <br>
    <p>El nombre es: <?php echo getDatos($diccionario, "usuario3", "nombre") ?></p>
    <p>El apellido es: <?php echo  getDatos($diccionario, "usuario3", "apellido") ?></p>
    <p>El email es: <?php echo  getDatos($diccionario, "usuario3", "email") ?></p>

</body>
</html>
