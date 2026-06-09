<?php
// src/includes/db.php

$host = 'localhost';
$db   = 'eventplan_pro';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // For development, we might want to see the error. In production, log it.
     // die($e->getMessage());

     // Fallback for when the database is not yet set up, to avoid breaking the UI during exploration
     $pdo = null;
}

/**
 * Helper to get PDO instance
 */
function getDB() {
    global $pdo;
    return $pdo;
}
?>
