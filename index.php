<?php

session_start();

if (!isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == false) {
    header('Location: login.php');
}

//$var1 = "one";
//$var2 = "two";
//$array = [$var1, $var2];
//
//var_dump($array);
//
//$array = [
//    "foo" => $var1,
//    "bar" => $var2
//];
//
//echo $array["bar"];
//
//var_dump($array);
//
//$array["hello"] = $var3 = 1;
//
//var_dump($array);

echo "SESSION";
var_dump($_SESSION);

echo "POST";
var_dump($_POST);

echo "GET";
var_dump($_GET);

echo "Hello" ." ". $_SESSION['username'] ." ". "is connected";


?>

<html>
<a href="logout.php">Logout</a>
</html>