<?php
$host = 'localhost';
$dbname = 'maintenance_db';
$username = 'root';
$password = '';

try {
    $pdocon = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdocon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

?>