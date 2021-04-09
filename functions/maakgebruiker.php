<?php
//Kachung Li - 15-01-2020

include_once('../includes/globalevariabelen.php');
require_once(ROOT.'/includes/db.php');

session_start();

// TODO: Het wachtwoord hashen, kopiëren naar database en gebruiker maken, daarna wachtwoord verifieren bij het inloggen
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['verzenden'])) {
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        $wachtwoordHash = password_hash($wachtwoord, PASSWORD_BCRYPT);

        $sql = "SELECT gebruikersnaam FROM beheerder WHERE gebruikersnaam = :gebruikersnaam";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':gebruikersnaam', $gebruikersnaam, PDO::PARAM_STR);
        $stmt->execute();

        $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($resultaat)) {
            $_SESSION['gebruikeraanmaken'] = 'Mislukt';
            header('location:' . $root . '/admin/index.php');
        } else {
        $sql = "INSERT INTO beheerder (gebruikersnaam, wachtwoord)
        VALUES (:gebruikersnaam, :wachtwoord)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':gebruikersnaam', $gebruikersnaam);
        $stmt->bindParam(':wachtwoord', $wachtwoordHash);
        $stmt->execute();

        $_SESSION['gebruikeraanmaken'] = 'Gelukt';
        header('location:' . $root . '/admin/index.php');
        }
    }
}