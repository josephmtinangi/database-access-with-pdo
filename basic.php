<?php

// 1. Connection
$pdo = new PDO('mysql:host=localhost;dbname=cda', 'root', '');

// 2. Statement
$stmt = $pdo->query('select * from users');

// 3. Execute
$stmt->execute();

// 4. Fetch Data
$users = $stmt->fetchAll();

var_dump($users);
