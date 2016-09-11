<?php
session_start();

include "database.php";
include "hangman.php";

$game = new game();
$hangman = new hangman();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hangman->checkGuess();
}

echo "<center>";
echo "<h1><b>Hangman</b></h1>";
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
        </style>
    </head>
    <body>
        <center>
            <form method="post">
                <input type="text" name="guess" autofocus="autofocus">
                <input type="submit" value="Guess">
            </form>
        </center>
    </body>
</html>
