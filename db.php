<?php

$dbServerName = "localhost";
$dbUser = "root";
$dbPass = "";
$db = "penduDb";

try {
    $connexion = new PDO("mysql:host=localhost;dbname=penduDb", 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
}

?>