<?php

class Database
{
    public $connection;
    public function __construct(){
        

        $this->connection = new PDO("mysql:host=" . $_ENV['MYSQL_HOST'] . ";dbname=". $_ENV['MYSQL_DATABASE'] .";charset=utf8mb4", $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
