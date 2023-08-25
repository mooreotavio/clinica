<?php

class Database
{
    public $connection;
    public function __construct(){
        

        $this->connection = new PDO('mysql:host=' . DATABASE_HOST . ';dbname='. DATABASE_NAME .';charset=utf8mb4', DATABASE_USER, DATABASE_PASSWORD);
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
