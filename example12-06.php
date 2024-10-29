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
            // continue.php
            session_start();

            if (isset($_SESSION['forename'])) {
                $forename = htmlspecialchars($_SESSION['forename']);
                $surname = htmlspecialchars($_SESSION['surname']);

                echo "Welcome back $forename.<br>"
                . "Your full name is $forename $surname.<br>";
            } else {
                echo "Please <a href='authenticate2.php'>click here</a> to log in.";
            }
            ?>
        </div>
    </body>
</html>
