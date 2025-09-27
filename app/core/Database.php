<?php

class Database
{
    private $conn;

    public function __construct(){
        try {
            $dsn = "mysql:host=". DBHOST .";dbname=". DBNAME .";charset=utf8mb4";
            $this->conn = new PDO($dsn, DBUSER, DBPASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function get_connection(){
        return $this->conn;
    }
}