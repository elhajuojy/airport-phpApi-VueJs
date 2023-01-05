<?php
namespace core;
use core\Model;
use PDO;
use PDOException;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try{
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }catch(PDOException $e){

            echo "=>".$e;
            die();

        }
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);
        // func::dd($params);
        // dd($this->statement);
        $this->statement->execute($params);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }


}