<?php
// Kachung Li - 13-01-2020

include_once('../includes/globalevariabelen.php');
require_once(ROOT.'/includes/db.php');


session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['login'])) {
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        $sql = "SELECT wachtwoord FROM beheerder WHERE gebruikersnaam = :gebruikersnaam";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':gebruikersnaam', $gebruikersnaam, PDO::PARAM_STR);
        $stmt->execute();

        $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);

        //TODO: dubbele code bij de else checken
        if (!empty($resultaat)) {
            if (password_verify($wachtwoord, $resultaat['wachtwoord'])) {
                $_SESSION['gebruikersnaam'] = $gebruikersnaam;
                header("location: $root/admin/index.php");
            } else {
                $_SESSION['status'] = 'Ongeldig';
                header('location: ' . $root . '/login.php');
            }
        } else {
            $_SESSION['status'] = 'Ongeldig';
            header('location: ' . $root . '/login.php');
        }
    }
}