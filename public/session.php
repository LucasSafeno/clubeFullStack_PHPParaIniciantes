<?php
session_start();


$_SESSION['name'] = 'Lucas';

// echo session_id();

$_SESSION['person'] = ['name' => 'Lucas', 'age' => 30];

?>