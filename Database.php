<?php

class Database
{
    public $connection;
    public function __construct(){
        $dsn = "mysql:host=containers-us-west-79.railway.app;port=5544;dbname=railway;password={$_MYSQLPASSWORD};";

        $this->connection =  new PDO($dsn, 'root');
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}