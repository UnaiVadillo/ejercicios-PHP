<?php
$diccionario = [
    "usuario1" => [
        "nombre" => "Unai",
        "apellido" => "Vadillo",
        "email" => "unai@gmail.com"
    ],
    "usuario2" => [
        "nombre" => "Victor",
        "apellido" => "Saiz",
        "email" => "victor@gmail.com"
    ],
    "usuario3" => [
        "nombre" => "Juan",
        "apellido" => "Da silva",
        "email" => "juan@gmail.com"
    ]
];



function getDatos($diccionario, $usuario, $tipoDato) {
    return $diccionario[$usuario][$tipoDato];
}

require "ej15.view.php";