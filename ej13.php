<?php
$animales = ['perro','gato','pajaro','leon'];
$colores = ['naranja','azul','verde','rojo'];

$sizeAnimales = count ($animales);
$sizeColores = count ($colores);

function añadirAnimal ($animales){
    array_push($animales, 'zorro');
}
function añadirColor ($colores){
    array_unshift($colores, 'blanco');
}
$todos= array_merge($animales,$colores);
require ej13.view.php;
?>