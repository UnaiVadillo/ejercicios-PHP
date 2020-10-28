<?php
function getValor($ciudades, $posicion){
    return $ciudades[$posicion];
}
function setValor($ciudades,$posicion, $valor){
    $ciudades[$posicion]=$valor;
    return $ciudades;
}
$ciudades = ["Paris", "Berlin", "Amsterdam", "Praga"];
$primerElemento = getValor($ciudades,0);
$cuartoElemento = getValor($ciudades,3);
$ciudades = setValor($ciudades,3,"Vitoria");

require "ej12.view.php";
?>