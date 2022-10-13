<?php

class Database
{
    private $host = "localhost";
    private $username = "viphong";
    private $password = "viphong";
    private $dbname = "veganetwork";

    public function Connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host; dbname=$this->dbname; charset=utf8", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            die("Lỗi : " . $e->getMessage());
        }
    }
}

$a = new Database();
$a->Connect();
