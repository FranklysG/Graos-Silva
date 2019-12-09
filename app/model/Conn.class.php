<?php

class Conn
{

    private static $transaction;
    private $host;
    private $dbname;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "graossilva";
        $this->username = "SeuUser";
        $this->password = "suaSenha";
    }

    public function open()
    {
        try {
           if(self::$transaction == null){
                self::$transaction = new PDO("mysql:host={$this->host};dbname={$this->dbname}", "{$this->username}", "{$this->password}");
                self::$transaction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            return self::$transaction;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function close(){
        self::$transaction = null;
    }

    public function id(){
        $this->open()->lastInsertId();
    }

    public function rollback(){
        $this->open()->rollback();
    }

    public function sqlRows($sql, $param = null)
    {
        try {
            $stmt = $this->open()->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function sqlOne($sql, $param = null){
        try {
            $stmt = $this->open()->prepare($sql);
            return $stmt->execute($param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
