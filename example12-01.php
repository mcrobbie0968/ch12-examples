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
            if (isset($_SERVER['PHP_AUTH_USER']) &&
                    isset($_SERVER['PHP_AUTH_PW'])) {
                echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
                " Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
            } else {
                header('WWW-Authenticate: Basic realm="Restricted Area"');
                header('HTTP/1.1 401 Unauthorized');
                die("Please enter your username and password");
            }
            ?>
        </div>
    </body>
</html>
