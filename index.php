<?php

include 'db.php';
include 'header.php';
session_start();

if (!isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == false) {
    header('Location: login.php');
}

if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == true) {
    include 'game.php';
}

?>