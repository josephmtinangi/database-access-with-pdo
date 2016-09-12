<?php

// 1. Connection
try {
	$pdo = new PDO('mysql:host=localhost;dbname=chinook', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}

$artistId = 21;

$sql = "select * from Album where ArtistId = :artistId";

// 2. Statement

$stmt = $pdo->prepare($sql);

// 3. Execute

$stmt->bindParam(':artistId', $artistId);

$stmt->execute();

// 4. Fetch Data

$albums = $stmt->fetchAll();
