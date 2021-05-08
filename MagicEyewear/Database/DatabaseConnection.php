<?php
class DatabaseConnection{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'magiceyewear';

    protected $connection;

    public function __construct(){

        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

            if (!$this->connection) {
                echo 'Cannot connect to database';
                exit;
            }
        }

        return $this->connection;
    }
}



 ?>