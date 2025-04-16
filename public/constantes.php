<?php

//? Constantes - não altera o valor
// define("NAME", "Lucas");

// echo NAME;

// function teste()
// {
//     echo __FUNCTION__; // constante mágica
//     echo __METHOD__; // constante mágica
// }

// echo DIRECTORY_SEPARATOR;


//? Verificar se uma constante está definida
// define("NAME", "Lucas");

// if (defined('NAME')) {
//     echo "Foi defenida";
// }

//? PEgar todas as constantes
$cons = get_defined_constants(true);


var_dump($cons);