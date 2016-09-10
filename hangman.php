<?php

class hangman {
    private $maxGuesses;
    private $guessedLetters;
    private $word;

    public function __construct() {
        $this->maxGuesses = 3;
        $this->guessedLetters = null;
    }

    public function fillDashes($word) {
        for ($ii = 0; $ii < strlen($word); $ii++) {
            echo " - ";
        }
    }

    /**
     * @return mixed
     */
    public function getWord() {
        return $this->word;
    }

    /**
     * @param mixed $word
     */
    public function setWord($word) {
        $this->word = $word;
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