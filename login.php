<?php

session_start();
include 'db.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $_SESSION['isConnected'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

if (isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == true) {
    header('Location: index.php');
}
?>

    <body>
        <h2>Login</h2>
        <div class="containerLoginForm">

            <form action="login.php" method="post">
                <label for="username"><b>firstname</b></label>
                <input type="text" placeholder="Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" required>

                <button type="submit">Login</button>

                <button type="button" class="cancelbtn">Cancel</button>
                <span class="lostPassword"><a href="lostPassword.php">Lost Password</a></span>
                <span class="register"><a href="register.php">Register</a></span>
            </form>
        </div>
    </body>


