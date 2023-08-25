<?php

class Database
{
    public $connection;
    public function __construct(){
        $dsn = "mysql:host=$MYSQLHOST;port=$MYSQLPORT;dbname=$MYSQLDATABASE;password=$MYSQLPASSWORD;user=$MYSQLUSER";

        $this->connection =  new PDO($dsn, 'root');
    }
    public function query($query)
    {
       

        $statement = $this->connection->prepare($query);

        $statement->execute();


        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}
