<?php
// primero validamos que se hayan introducido un usuario y su contraseña
if (empty($_POST["usuario"]) || empty($_POST["password"])) {
    echo "Hay que introducir un usuario y una contraseña";
} else { // si hay datos, enviamos la funcion validarUsuario con los valores leidos, que comprobara si son correctos y nos devuelve true o false
    // si la funcion nos devuelve true, mandamos un mensaje de bienvenida
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        echo "Bienvenido " . $_POST["usuario"] . "<br>";
    }else{
        // si devuelve false, mandamos un mensaje de inicio de sesion incorrecto
        echo "Inicio de sesion incorrecto<br>";
    }
}

// creamos una funcion que valida el usuario
function validarUsuario($usuario, $password) {
    // creamos un array asociativo donde almacenamos los usuarios
    $listaUsuarios = ["Dani"=>"Ceat1234@","Marina"=>"Ceat1234@","Ana"=>"Ceat1234@"];
    // si el usuario existe en el array listaUsuarios
    if (array_key_exists($usuario, $listaUsuarios)) {
        // y si el usuario y la contraseña coinciden
        if ($listaUsuarios[$usuario] === $password) {
            return true;
        }else {
            return false;
        }
    }
}


