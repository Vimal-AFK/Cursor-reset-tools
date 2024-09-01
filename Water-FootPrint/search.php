<?php
// search.php
$name = $_GET['name'];

// Connect to the database
$pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');

// Query to find the water footprint
$stmt = $pdo->prepare('SELECT waterFootprint FROM food WHERE name = :name');
$stmt->execute(['name' => $name]);

$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(['waterFootprint' => $result['waterFootprint']]);
?>
