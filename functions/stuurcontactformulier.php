<?php
// Kachung Li - 14-01-2020

include_once('../includes/globalevariabelen.php');
require_once(ROOT . '/includes/db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $naam = $_POST['naam'];
    $telefoon = $_POST['telefoon'];
    $email = $_POST['email'];
    $datum = $_POST['datum'];
    $project = $_POST['project'];
    $belangstelling = $_POST['belangstelling'];
    $bericht = $_POST['bericht'];
    $bellen = $_POST['bellen'];

    $sql = "INSERT INTO berichten (naam, telefoon, email, datum, project, belangstelling, bericht, bellen)
        VALUES (:naam, :telefoon, :email, :datum, :project, :belangstelling, :bericht, :bellen)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $naam, PDO::PARAM_STR);
    $stmt->bindParam(':telefoon', $telefoon, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':datum', $datum, PDO::PARAM_STR);
    $stmt->bindParam(':project', $project, PDO::PARAM_STR);
    $stmt->bindParam(':belangstelling', $belangstelling, PDO::PARAM_STR);
    $stmt->bindParam(':bericht', $bericht, PDO::PARAM_STR);
    $stmt->bindParam(':bellen', $bellen, PDO::PARAM_INT);

    if (!$stmt->execute()) {
        echo "Het is niet gelukt om de bericht te sturen! " . $stmt->errorInfo();
    }
    $_SESSION['status'] = 'Verzonden';

    header('location: ' . $root . '/contact.php');
}
?>