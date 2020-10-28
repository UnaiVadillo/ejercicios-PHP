<?php
function multiplicar($a, $b){
    return $a * $b;
}

echo "Resultado de " . $_GET["a"] . " x " .$_GET["b"] ." = ". multiplicar($_GET["a"], $_GET["b"]);

?>