<?php

// Arrays
// $data = array('Lucas', 'Thauanna', 'Zé', 30, true);

// //print_r($data);
// //var_dump($data);
// //echo $data[1];

// //? Adicionar Elemento array
// //$data[5] = 'teste';

// //var_dump($data);

// //? Adicionar Elemento array (final)
// // $lenght = count($data);

// // $data[$lenght] = 'last';

// //? array_push -> adicionar elemento ao final do array

// array_push($data, 'last');

// //? array_unshift -> adiciona elemento no inicio
// array_unshift($data, 'first');

// var_dump($data);

// $person = ['name' => 'Lucas', 'age' => 30];

// var_dump($person['name']);

$person = ['name' => 'Lucas', 'age' => 30, 'documents' => ['cpf' => '1234567899', 'rg' => '1231321']];
var_dump($person['documents']['cpf']);

