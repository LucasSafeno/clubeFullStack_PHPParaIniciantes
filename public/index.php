<?php

// include
// ? include continua a aplicação
include("./teste1.php");

//require
//? Require se dar erro ao incluir, para a aplicação
//? require_once = requeire apenas uma vez, msema coisa o include_once
require './teste.php';

echo $name;