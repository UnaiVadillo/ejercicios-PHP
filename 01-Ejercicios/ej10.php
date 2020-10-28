<?php
function concatenar($cad1, $cad2 = "anónimo"){
    return $cad1." ".$cad2;

}

$cadena1 = $_GET["cad1"];
$cadena2 = $_GET["cad2"];
$frase = concatenar($cadena1);
echo $frase;

?>