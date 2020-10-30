<?php
function operacion($num1, $num2){
    if($num1 == $num2){
        return $num1 + $num2;
    }else {
        return $num1 * $num2;
    }
}
require "ej16.view.php";