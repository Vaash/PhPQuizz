<?php

    ob_start();
    session_start();

?>

    <body>
        <h2>Login</h2>
        <div class="containerLoginForm">

            <?php
                $message = '';

                if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

                    if ($_POST['username'] == '' && $_POST['password'] == '') {

                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        $_SESSION['username'] = '';

                        echo "Connected !";
                    }else {
                        $message = "Wrong username or password !";
                    }
                }
            ?>
        </div>



    </body>


