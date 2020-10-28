<?php
function esMayor($a, $b){
    if($a>$b){
        echo "TRUE";
    }else{
        echo "FALSE";
    }
}
esMayor($_GET["a"], $_GET["b"]);

?>