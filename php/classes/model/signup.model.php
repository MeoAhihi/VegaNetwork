<?php
include 'database.php';
class SignupModel extends Database
{

    protected function checkUser($username, $email)
    {
        $stmt = $this->Connect()->prepare('SELECT name FROM users WHERE name = ? OR email = ?');

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../../login.php?error=stmtfailed");
            exit();
        }

        return $stmt->rowCount() === 0;
    }

    protected function setuser($username, $email, $pwd)
    {
        $stmt = $this->Connect()->prepare('INSERT INTO users (name, email, password) VALUES (?,?,?);');
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        if (!$stmt->execute(array($username, $email, $pwd))) {
            $stmt = null;
            header("location: ../../login.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}
