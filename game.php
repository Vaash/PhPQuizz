<?php

$gameOver = false;
$pointsLeft = 10;


    include 'link.php';

    /*
    $sql = "SELECT RAND(word) FROM wordtofind";
    $stmt = $db->prepare($sql);
    $stmt->bindParam();
    $query = $stmt->execute();
    $word = $query->fetch(PDO::FETCH_COLUMN, RAND());
    var_dump($word);
    */

if($pointsLeft == 0) {
    $gameOver = true;
    echo 'GAME OVER !';
    echo 'Try again ?';
}
?>