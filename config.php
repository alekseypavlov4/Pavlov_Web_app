<?php
$host = 'localhost';
$db   = 'webapp_db';
$user = 'root';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Ошибка подключения к БД: " . $e->getMessage();
}
?>
