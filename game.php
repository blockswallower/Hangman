<?php

include "database.php";

class game {
    public $db;

    public function __construct() {
        if (!isset($_SESSION['word'])) {
            $this->setTries(10);
        }

        $this->db = new database();
    }

    public function getWords($table_name) {
        $result = $this->db->prepare('SELECT * FROM '.$table_name);
        $result->execute();

        return $result->fetchAll();
    }

    public function addWord() {
        if(!empty($_POST['word'])) {
            if (isset($_POST['word'])) {
                $word = $_POST["word"];

                $insert = $this->db->prepare('INSERT INTO `hangman`.`words` (`id`, `word`) VALUES (NULL, "'. $word .'" );');
                $insert->execute();

                echo "<h4>Word added!</h4>";
            } else {
                echo "Fill in the input field";
            }
        } else {
            echo "Fill in the input field";
        }
    }

    public function endGame() {
        header("Location: destroy.php");
    }

    public function setTries($amount) {
        $_SESSION['tries'] = $amount;
    }
}