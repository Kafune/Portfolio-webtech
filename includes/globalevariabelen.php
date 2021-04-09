<?php
//Kachung Li - 07-01-2020

// root pad. Nodig voor alle include bestanden
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/KL/php-beroepsproduct-2');

// root pad. Nodig voor html href links.
$root = '/KL/php-beroepsproduct-2';

// Dit is relevant voor alle pagina's die iets in de pagina hebben wat afwijkt van andere pagina's.
// Bijvoorbeeld contact pagina met google maps of admin pagina's zonder header
$url = $_SERVER['REQUEST_URI'];
?>


