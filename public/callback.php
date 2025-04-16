<?php

//? Introdução
// function teste($name)
// {
//     return 'Olá meu nome é ' . $name;
// }

// function teste2($callback)
// {
//     return $callback('Lucas');
// }

// echo teste2('teste');

//? Verificar se é callback ou is_callable
// function teste($name)
// {
//     return 'Meu nome é ' . $name;
// }

// function teste2($callback)
// {
//     if (is_callable($callback)) {

//         return teste($callback('Lucas'));
//     } else {
//         return 'Não é um callback';
//     }
// }

// $user = 'Lucas';

// echo teste2('teste');


//? call_user_unc -> Espera um callback como parametro


// function teste($name)
// {
//     return 'Meu nome é ' . $name;
// }
// echo call_user_func('teste', 'Lucas');

//? Executa call_user_func  de uma classe
// class User
// {
//     public function teste($name, $age)
//     {
//         return 'Meu nome é' . $name . 'e minha idade é ' . $age . ' anos';
//     }
// }

// $user = new User();

// echo call_user_func([$user, 'teste'], 'Lucas', 30);

//? call_user_func dentro de função

// function teste($name)
// {
//     return 'Nome é : ' . $name;

// }
// function teste2($callback)
// {
//     return call_user_func($callback, 'Lucas');
// }


// echo teste2('teste');

//? _invoke pode ser passando como callback
// class User
// {
//     public function __invoke()
//     {
//         return 'teste';
//     }
// }

// $user = new User();

// function teste($callback)
// {
//     return $callback();
// }

// echo teste($user);

//? cal_user_func_array
// function teste($name, $age)
// {
//     return 'Olá, meu nome é ' . $name . ' e minha idade é de ' . $age . ' anos';
// }
// echo call_user_func_array('teste', ['Lucas', 30]);

//? user uma closere como callback

$user = function () {
    return 'Teste';
};

function teste($callback)
{
    return $callback();
}

echo teste($user);