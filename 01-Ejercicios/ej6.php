<?php
function multiplicar($a, $b){
    $resultado=  $a * $b;
    echo "Resultado de " . $_GET["a"] . " x " .$_GET["b"] ." = ". $resultado;
}

multiplicar($_GET["a"], $_GET["b"]);

?>