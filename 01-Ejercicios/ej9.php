<?php
function imprimir($cad1, $cad2){
    return $cad1 ." ". $cad2;
}
$cadena1 = $_GET["cad1"];
$cadena2 = $_GET["cad2"];
$frase=  imprimir($cadena1, $cadena2);
echo $frase;

?>