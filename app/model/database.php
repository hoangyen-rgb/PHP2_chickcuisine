<?php
namespace App\model;
use PDO;
use PDOException;
class database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $databasename = "chickcuisine";
    protected $conn = null;

    function connection_database()
    {
        try {
            $conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->databasename",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch (PDOException $e) {
            //echo "Connection failed: " . $e->getMessage();
            throw $e;
        }
        return $conn;
    }
}