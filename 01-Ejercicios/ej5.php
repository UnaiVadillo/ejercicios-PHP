<?php

$a =  $_GET["a"];
$b =  $_GET["b"];

$resta = ($a - $b);
$division = ($a / $b);
$mayorque = $a > $b;
$menorque =  $a <= $b;

echo $resta . "<br>";
echo $division . "<br>";
var_export($mayorque);
echo "<br>";
var_export($menorque);
?>