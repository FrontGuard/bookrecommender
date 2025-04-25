<?php
header('Content-Type: application/json');

// Підключення до MySQL
$host = 'localhost';
$db   = 'bookdb';
$user = 'root';
$pass = ''; // ← якщо є пароль — впиши сюди
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Помилка підключення до бази даних']);
    exit;
}

// Отримання жанру з URL
$genre = $_GET['genre'] ?? null;

if (!$genre) {
    echo json_encode(['error' => 'Потрібен параметр genre']);
    exit;
}

// Вибірка книг за жанром
$stmt = $pdo->prepare("SELECT * FROM books WHERE genre = ?");
$stmt->execute([$genre]);
$books = $stmt->fetchAll();

echo json_encode($books);
