<?php

class CrudSystemUser
{

    private $conn;

    public function __construct()
    {
        $this->conn = new Conn;
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function add(SystemUser $user)
    {
        try {
            $sql = "INSERT INTO system_user (login, pass, apelido) VALUES (:login, :pass, :apelido);
            ";
            $param = array(
                ':login' => $user->getLogin(),
                ':pass' => $user->getPass(),
                ':apelido' => $user->getApelido()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(SystemUser $user){
        try {
            $sql = "DELETE FROM user WHERE id =:id";
            $param = array(
                ':id' => $user->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

}
