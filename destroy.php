<?php
session_start();
session_destroy();
session_unset();

include "graphics.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                font-size: 30px;
            }

            #gallow {
                margin-left: 750px;
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
        <div id="gallow">
            <?php graphics::drawFullGallow(); ?>
        </div>
    </body>
</html>
