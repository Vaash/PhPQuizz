<?php

include 'db.php';

?>


<form action="login.php">
    <label for="username">Username</label>
    <input type="text" placeholder="Username" name="username" required>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" required>

    <label for="email">Email</label>
    <input type="email" placeholder="Email" name="email" required>

    <button type="submit">Register</button>
</form>


