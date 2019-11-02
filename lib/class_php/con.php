<?php

class Conn
{

    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "graossilva";
        $this->username = "root";
        $this->password = "app@123.";
    }

    public function open()
    {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", "{$this->username}", "{$this->password}");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function sql($sql, $param = null)
    {
        try {
            $stmt = $this->open()->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
