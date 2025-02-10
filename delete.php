<?php
// delete_book.php

require_once 'db_config.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM books WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("Location: index.php?message=Book deleted successfully");
        exit();

    } catch (PDOException $e) {
        die("Error deleting book: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>