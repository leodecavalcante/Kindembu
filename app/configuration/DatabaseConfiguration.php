<?php
/**
 * Created by PhpStorm.
 * User: leodm
 * Date: 22/08/2018
 * Time: 15:00
 */

class DatabaseConfiguration
{

    private $host = "localhost";
    private $db_name = "maps";
    private $username = "postgres";
    private $password = "postgres";
    public $conn;

    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("jdbc:postgres://" . $this->host . ":5432/" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}