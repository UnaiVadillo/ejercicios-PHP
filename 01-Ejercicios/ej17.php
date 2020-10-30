<?php

$usuarios = [
    "usuario1" =>[
        "nombre"=>"Unai",
        "pass"=> "12345",
        "email" => "unai@gmail.com"
    ],
    "usuario2" =>[
        "nombre"=>"Pepe",
        "pass"=> "123",
        "email" => "pepe@gmail.com"
    ],
];
/*function login($usu, $pass, $usuarios){
    if(!array_key_exists($usu, $usuarios)) {
        return "El usuario no existe";
    } elseif ($pass != $usuarios[$usu]["pass"]){
        return "Contraseña incorrecta";
    }
    return "Login correcto";
}*/
require "ej17.view.php";