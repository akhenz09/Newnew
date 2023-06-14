<?php
// connect to our MySQL database.

class database {
    public $connection;
    public function __construct() {

    
        $dsn = "mysql:host:localhost;port=3386;dbname=myapp;user=root;charset=utf8mb4";

 
        //s2ep17 PDO First Steps
        $this->connection = new PDO($dsn);

    }
    public function query ($query) 
    {
        
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }

}