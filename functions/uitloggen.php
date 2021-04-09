<?php
//Kachung Li - 10-01-2020

include_once('../includes/globalevariabelen.php');
$root = "/KL/php-beroepsproduct-2";
session_start();

if(!empty($_SESSION['gebruikersnaam'])) {
    session_destroy();
    header('location: '.$root.'/index.php');
}
