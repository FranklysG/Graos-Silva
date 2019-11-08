<?php

class CrudVeiculo
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

    public function add(Veiculo $veiculo)
    {
        try {
            $sql = "INSERT INTO veiculo(marca, cor, placa) VALUES (:marca, :cor, :placa)";
            $param = array(
                ':marca' => $veiculo->getMarca(),
                ':cor' => $veiculo->getCor(),
                ':placa' => $veiculo->getPlaca()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Veiculo $veiculo)
    {
        try {
            $sql = "UPDATE veiculo SET marca=:marca, cor=:cor, placa=:placa WHERE id=:id";
            $param = array(
                ':id' => $veiculo->getId(),
                ':marca' => $veiculo->getMarca(),
                ':cor' => $veiculo->getCor(),
                ':placa' => $veiculo->getPlaca()
            );
            var_dump($sql);
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
