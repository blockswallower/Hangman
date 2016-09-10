<?php
class database extends PDO {
    private $db_type = 'mysql';
    private $db_host = 'localhost';
    private $db_name = 'hangman';
    private $db_username = 'root';
    private $db_password = '';

    public function __construct() {
        $dsn = "$this->db_type:dbname=$this->db_name;host=$this->db_host";
        parent::__construct($dsn, $this->db_username, $this->db_password);
    }
}