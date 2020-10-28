<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>
<body>
<ul>
    <li>Tamaño primer array: <?= $sizeAnimales ?></li>
    <li>Tamaño primer array: <?= $sizeColores ?></li>
    <li>Tamaño al añadir animal: <?= count($animales) ?>.
        Resultado del array: <pre><?php print_r($animales) ?></pre></li>
    <li>Tamaño al añadir color: <?= count($colores); ?>.
        Resultado del array: <pre><?php print_r($colores) ?></pre></li>

    <li>Dos arrays unidos: <pre><?php  print_r($todos) ?></pre></li>
</ul>

</body>
</html>