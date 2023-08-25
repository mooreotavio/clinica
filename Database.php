<?php

class Database
{
    public $connection;
    public function __construct(){
        

        $this->connection = new PDO('mysql:host=' . MYSQLHOST . ';dbname='. MYSQLDATABASE .';charset=utf8mb4', MYSQLUSER, MYSQLPASSWORD);
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
