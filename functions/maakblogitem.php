<?php
//Kachung Li 14-01-2020

include_once('../includes/globalevariabelen.php');
require_once(ROOT . '/includes/db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titel = $_POST['titel'];
    $tekst = $_POST['tekst'];

    $sql = "INSERT INTO blog(titel, tekst, datum)
    VALUES(:titel, :tekst, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':titel', $titel, PDO::PARAM_STR);
    $stmt->bindParam(':tekst', $tekst, PDO::PARAM_STR);

    if (!$stmt->execute()) {
        echo "Het is niet gelukt om de blogitem aan te maken! " . $stmt->errorInfo();
    }

    $_SESSION['status'] = 'Verzonden';

    header('location: ' . $root . '/admin/index.php');

}
?>

