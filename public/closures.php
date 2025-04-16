<?php

//funcao anonima -> função sem nome

// $person = function ($name) {

//     return $name;

// };

//var_dump($person('Lucas'));

function teste($name)
{
    $person = function () use ($name) {
        return $name;
    };

    return $person;
}

var_dump(teste('Lucas')());