<?php

$animales = array('Tigre','Perro','Gato','Oso');
$colores = array('Azul','Verde','Rojo','Naranja');

$sizeAnimales = count($animales);
$sizeColores = count($colores);
array_push($animales, "Zorro");
array_unshift($colores, "Rosa");
$todos = array_merge($animales, $colores);
require "ej13.view.php";
?>