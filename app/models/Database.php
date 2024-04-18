<?php
class Database {
    public $connection;
    public function __construct($dbConfig) {
        $this->connection = mysqli_connect($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['dbName']);
    }
}
?>
