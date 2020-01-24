<?php

session_start();
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['password'] == $_POST['confirmpassword']) {

        $username = $mysql->real_escape_string($_POST['username']);
        $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

        if (isset($_POST['username'])) {

            $sql = "INSERT INTO user(firstname, lastname, password) VALUES ('$username', NULL, '$password')";
            echo $message = 'Registration complete!';
            header('Location: login.php');
        }
        else
            echo $message = '$username could not be added to the db.';
    }
    else {
        echo 'Passwords do not match.';
    }
}
?>


<form action="register.php" method="post">
    <input type="text" placeholder="Username" name="username" required>
    <input type="password" placeholder="Password" name="password" required>
    <input type="password" placeholder="Confirm password" name="confirmpassword" required>
    <button type="submit">Register</button>
</form>


<?php

/*
$sql = 'INSERT INTO user(firstname, lastname, password) VALUES(:firstname, :lastname, :password)';
$stmt = $mysql->prepare($sql);
$stmt->bindParam(':firstname', $_POST['firstname']);
$stmt->bindParam(':lastname', $_POST['lastname']);
$stmt->bindParam(':password', password_hash($_POST['password'],PASSWORD_ARGON2I) );
$query = $stmt->execute();
*/

?>