<?php
// Kachung Li 15-01-2020

include_once('../includes/globalevariabelen.php');
require_once(ROOT . '/includes/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT id FROM blog WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($resultaat)) {
        $_SESSION['blogverwijderen'] = 'Mislukt';
        header('location:' . $root . '/admin/index.php');
    } else {
        $sql = "DELETE FROM blog WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $_SESSION['blogverwijderen'] = 'Gelukt';
        header('location:' . $root . '/admin/index.php');
    }
}