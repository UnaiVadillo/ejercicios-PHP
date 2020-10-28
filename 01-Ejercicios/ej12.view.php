<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 12</title>
</head>
<body>
<ul>
    <li>Primer elemento del Array: <?= $primerElemento ?></li>
    <li>Cuarto elemento del Array: <?= $cuartoElemento ?></li>
    <li><pre><?php print_r($ciudades) ?></pre></li>
    <li>Valor del cuarto elemento del Array: <?= getValor($ciudades,3) ?></li>
</ul>

</body>
</html>