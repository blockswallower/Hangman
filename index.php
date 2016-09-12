<?php
session_start();

include "database.php";
include "hangman.php";
include "graphics.php";

$game = new game();
$hangman = new hangman();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hangman->checkGuess();
}

echo "<center>";
echo "<h1><b>Hangman</b></h1>";
echo "(" . $_SESSION['word'] . ") <br>";
$hangman->printDashes();
echo "<br>";
echo "Tries left: " . $_SESSION['tries'];
echo "<br>";
echo "</center>";
?>


<!DOCTYPE html>
<html lang="nl">
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
            <form method="post">
                <input type="text" name="guess" autofocus="autofocus">
                <input type="submit" value="Guess">
            </form>
        </center>
        <div id="gallow">
            <?php graphics::drawGallow(); ?>
        </div>
    </body>
</html>
