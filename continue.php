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
//            continue.php
//            session_start();
//
//            if (isset($_SESSION['forename'])) {
//                $forename = htmlspecialchars($_SESSION['forename']);
//                $surname = htmlspecialchars($_SESSION['surname']);
//
//                echo "Welcome back $forename.<br>"
//                . "Your full name is $forename $surname.<br>";
//            } else {
//                echo "Please <a href='authenticate2.php'>click here</a> to log in.";
//            }
            ?>
            <?php
            session_start();

            if (isset($_SESSION['forename'])) {
                $forename = $_SESSION['forename'];
                $surname = $_SESSION['surname'];

                destroy_session_and_data();

                echo htmlspecialchars("Welcome back $forename");
                echo "<br>";
                echo htmlspecialchars("Your full name is $forename $surname.");
            } else {
                echo "Please <a href='authenticate2.php'>click here</a> to log in.";
            }

            function destroy_session_and_data() {
                $_SESSION = array();
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 2592000, $params['path']);
                session_destroy();
            }
            ?>
        </div>
    </body>
</html>
