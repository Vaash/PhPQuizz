<?php

include 'link.php';

var_dump($_SESSION);

?>


<div class="wordToFindContainer">
    <?php
    $wordQuery = $db->prepare('SELECT RAND(word) FROM wordtofind');
    $array = ['word'];
    $wordQuery->execute($array);

    $word = $wordQuery->fetchAll(PDO::FETCH_COLUMN, RAND());
    var_dump($word);
    ?>
</div>
