<?php
// if (isset($_SESSION['name'])) {
//     echo 'Sessão existe' . $_SESSIOn['name'];
// } else {
//     echo "Sessão não existe";
// }
// unset($_SESSION['name']); -> Destroi uma session
// session_destroy(); -> Destroi todas as sessões

session_start();

unset($_SESSION['name']);
//echo isset($_SESSION['name']) ? 'Sessão existe' . $_SESSION['name'] : 'Sessão não existe';
(isset($_SESSION['person']) ? var_dump('Sessão existe' . $_SESSION['person']) : 'Sessão não existe');

?>