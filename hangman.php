<?php

include "game.php";

class hangman {
    private $maxGuesses;
    private $guessedLetters;
    private $game;

    public function __construct() {
        $this->maxGuesses = 3;
        $this->guessedLetters = null;
        $this->game = new game();

        // fetch word
        if (!isset($_SESSION['word'])) {
            $array = $this->game->getWords("words");
            $rand_int = array_rand($array);
            $word = $array[$rand_int][1];
            $this->setWord($word);

            $_SESSION['dashArray'] = $this->fillDashArray($word);
            $_SESSION['charArray'] = str_split($word);
        }
    }

    public function fillDashArray($word) {
        $array = [];

        for ($ii = 0; $ii < strlen($word); $ii++) {
            $array[$ii] = "-";
        }

        return $array;
    }

    public function printDashes() {
        foreach ($_SESSION['dashArray'] as $dash) {
            echo $dash. " ";
        }
    }

    // Only for debugging
    public function printChars() {
        foreach ($_SESSION['charArray'] as $char) {
            echo $char. " ";
        }
    }

    public function findIndex($array, $item) {
        $index = -1;

        for ($ii = 0; $ii < count($array); $ii++) {
            if ($array[$ii] == $item) {
                if ($_SESSION['dashArray'][$ii] != "-") {
                    continue;
                } else {
                    $index = $ii;
                }
            }
        }

        return $index;
    }

    public function checkGuess() {
        $guess = $_POST['guess'];

        if (!empty($guess)) {
            if (isset($guess)) {
                if (strlen($guess) > 1) {
                    $split = str_split($guess);
                    $guess = $split[0];
                }

                if (in_array($guess, $_SESSION['charArray'])) {
                    $guessedChars = [];
                    for ($ii = 0; $ii < count($_SESSION['charArray']); $ii++) {
                        if ($guess == $_SESSION['charArray'][$ii]) {
                            $guessedChars[] = $guess;
                        }
                    }

                    foreach ($guessedChars as $char) {
                        $index = $this->findIndex($_SESSION['charArray'], $char);
                        $_SESSION['dashArray'][$index] = $guess;
                    }
                }
            }
        }
    }

    /**
     * @return mixed
     */
    public function getWord() {
        return $_SESSION['word'];
    }

    /**
     * @param mixed $word
     */
    public function setWord($word) {
        $_SESSION['word'] = $word;
    }

    /**
     * @return int
     */
    public function getMaxGuesses() {
        return $this->maxGuesses;
    }

    /**
     * @param int $maxGuesses
     */
    public function setMaxGuesses($maxGuesses) {
        $this->maxGuesses = $maxGuesses;
    }

    /**
     * @return null
     */
    public function getGuessedLetters() {
        return $this->guessedLetters;
    }

    /**
     * @param null $guessedLetters
     */
    public function setGuessedLetters($guessedLetters) {
        $this->guessedLetters = $guessedLetters;
    }
}