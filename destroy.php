<?php
session_start();
session_destroy();
session_unset();
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Game ended!</h1>
            <form action="index.php">
                <input type="submit" value="play again?">
            </form>
        </center>
    </body>
</html>
