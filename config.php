<?php
$host = 'sql212.infinityfree.com';
$db = 'if0_37582356_unitelab';
$user = 'if0_37582356';
$pass = 'k5aZz84GZeSK9R';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error koneksi ke database: " . $e->getMessage());
}
?>