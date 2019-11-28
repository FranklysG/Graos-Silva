<?php

class CrudSaida
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

    public function add(Saida $saida)
    {
        try {
            $sql = "INSERT INTO saida (armazem_id, motorista_id, produto_id, cliente_id, status_id, chave) VALUES (:armazem_id, :motorista_id, :produto_id, :cliente_id, :status_id, :chave)";
            $param = array(
                ':armazem_id' => $saida->getArmazem(),
                ':cliente_id' => $saida->getCliente(),
                ':motorista_id' => $saida->getMotorista(),
                ':produto_id' => $saida->getProduto(),
                ':status_id' => 2,
                ':chave' => AppUtil::Hash(6)
            );
            var_dump($saida);
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Saida $saida)
    {
        try {
            $sql = "UPDATE saida SET armazem_id=:armazem_id, motorista_id=:motorista_id, produto_id=:produto_id, cliente_id=:cliente_id WHERE id=:id;";
            $param = array(
                ':id' => $saida->getId(),
                ':armazem_id' => $saida->getArmazem(),
                ':cliente_id' => $saida->getCliente(),
                ':motorista_id' => $saida->getMotorista(),
                ':produto_id' => $saida->getProduto()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(Saida $saida)
    {
        try {
            $sql = "DELETE FROM saida WHERE id =:id";
            $param = array(
                ':id' => $saida->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
