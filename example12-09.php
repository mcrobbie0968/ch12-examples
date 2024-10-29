<!DOCTYPE html>
<html>
    <head>
        <title>PHP, MySQL and JavaScript</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            if (password_verify($_SERVER['PHP_AUTH_PW'], $pw)) {
                session_start();
                session_regenerate_id();

                $_SESSION['forename'] = $fn;
                $_SESSION['surname'] = $sn;

                echo htmlspecialchars("$fn $sn : Hi $fn,"
                        . "you are now logged in as '$un'");
                die("<p><a href='continue.php'>Click here to continue</a></p>");
            }
            ?>
        </div>
    </body>
</html>
