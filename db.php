<?php

    $dbServerName = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $db = "penduDb";

    try {
        $connected = new PDO("mysql:host=localhost;dbname=penduDb", 'root', '');

        $connected ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
    }

    catch (PDOException $exception) {
        echo "Connection failed: " . $exception ->getMessage();
    }
?>