<?php
$host = 'librarydb.cm3ngnr4xnyk.us-east-1.rds.amazonaws.com'; 
$port = 3306; 
$dbname = 'librarydb'; 
$user = 'librarydb'; 
$pass = 'librarydb123!';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>