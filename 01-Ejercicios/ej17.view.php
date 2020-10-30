<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
</head>
<body>
<p>Login de <?= $_GET["usu"] ?> con contraseña <?= $_GET["pass"] ?>... Resultado: <?= login($_GET["usu"],$_GET["pass"],$usuarios)?> </p>
</body>
</html>