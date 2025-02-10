<?php
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];

    try {
        $stmt = $pdo->prepare("INSERT INTO books (title, author) VALUES (:title, :author)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->execute();

        header("Location: index.php?message=Book added successfully");
        exit();

    } catch (PDOException $e) {
        die("Error adding book: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>