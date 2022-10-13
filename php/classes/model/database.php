<?php

class database
{
    private $host = "localhost";
    private $username = "viphong";
    private $password = "viphong";
    private $dbname = "veganetwork";

    protected function Connect()
    {
        global $host, $dbname, $username, $password;
        try {
            $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Lỗi : " . $e->getMessage());
        }
        return $pdo;
    }
}
