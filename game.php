<?php

include 'link.php';

var_dump($_SESSION);


if ()

/*Check if there's an existing game_id
 *
 * if not:
 *
 * - btn "start new game"
 *      execute new game query
 *
 *
 *
 */







?>







<div class="wordToFindContainer">
    <?php
    $sql = 'SELECT RAND(word) FROM wordtofind';
    $array = ['word'];
    $wordQuery->execute($array);

    $word = $wordQuery->fetchAll(PDO::FETCH_COLUMN, RAND());
    var_dump($word);
    ?>
</div>
