<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Email válido';
    } else {
        echo 'Email não válido';
    }
    //var_dump($name, $email);
}

?>