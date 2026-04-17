<?php
require 'db_config.php';

$coordinators = [
    ['username' => 'student2', 'password' => 'password20'],
    ['username' => 'student4', 'password' => 'password40'],
    
];

$stmt = $conn->prepare('INSERT INTO student (username, password) VALUES (?, ?)');

foreach ($coordinators as $coordinator) {
    $username = $coordinator['username'];
    $hashedPassword = password_hash($coordinator['password'], PASSWORD_BCRYPT);
    
    $stmt->bind_param('ss', $username, $hashedPassword);
    $stmt->execute();
}

echo 'Coordinators inserted successfully';
?>
