<?php

include "database.php";
include "hangman.php";
include "game.php";

$game = new game();
$hangman = new hangman();

$array = $game->getWords("words");
$rand_int = array_rand($array);

$word = $array[$rand_int][1];
$hangman->setWord($word);

echo $hangman->getWord(). "<br>";

$hangman->fillDashes($word);