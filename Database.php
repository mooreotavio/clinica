<?php

class Database
{
    public $connection;
    public function __construct(){
        

        $this->connection = new PDO('mysql:host=' . $_ENV['MYSQLHOST'] . ';dbname='. $_ENV['MYSQLDATABASE'] .';charset=utf8mb4', $_ENV['MYSQLUSER'], $_ENV['MYSQLPASSWORD']);
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
