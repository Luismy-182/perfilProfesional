<?php

function dd($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

 function isAuth(){

    if(!isset($_SESSION)){ //si sesion esta vacía iniciala
        session_start();
    }

    if(!$_SESSION['login']){ //si al iniciar no encuentas el login como tru expulsalo y que se autentifique
        header('Location: /login');
    }

    
}
