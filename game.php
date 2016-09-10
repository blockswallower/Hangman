<?php

class game {
    private $health;
    private $ended;
    private $score;
    private $won; 

    public $db;

    public function __construct() {
        $this->health = 8;
        $this->ended = false;
        $this->score = 0;
        $this->won = false;

        $this->db = new database();
    }

    public function getWords($table_name) {
        $result = $this->db->prepare('SELECT * FROM '.$table_name);
        $result->execute();

        return $result->fetchAll();
    }

    /**
     * @return int
     */
    public function getHealth() {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth($health) {
        $this->health = $health;
    }

    /**
     * @return boolean
     */
    public function isEnded() {
        return $this->ended;
    }

    /**
     * @param boolean $ended
     */
    public function setEnded($ended) {
        $this->ended = $ended;
    }

    /**
     * @return int
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore($score) {
        $this->score = $score;
    }

    /**
     * @return boolean
     */
    public function isWon() {
        return $this->won;
    }

    /**
     * @param boolean $won
     */
    public function setWon($won) {
        $this->won = $won;
    }
}