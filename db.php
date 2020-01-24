<?php

$dbServerName = "localhost";
$dbUser = "root";
$dbPass = "";
$db = "penduDb";

try {
    $connexion = new PDO('mysql:dbname=' . $db . ';host=' . $dbServerName . ';port=3306' , $dbUser, $dbPass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage();
}

?>