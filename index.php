<?php
session_start();

include "database.php";
include "hangman.php";

$game = new game();
$hangman = new hangman();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hangman->checkGuess();
}

echo $hangman->getWord(). "<br>";
$hangman->printDashes();
echo "<br>";
echo "Tries left: " . $_SESSION['tries'];
echo "<br>";
?>


<form method="post">
    <input type="text" name="guess">
    <input type="submit" value="Guess">
</form>
