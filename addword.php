<?php
include "game.php";

$game = new game();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $game->addWord();
}

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post">
            <center>
                <h1>Add a new word to your Hangman game!</h1>
                <input type="text" name="word"/>
                <input type="submit" value="add word!">
            </center>
        </form>
    </body>
</html>
