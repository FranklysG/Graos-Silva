<?php

class CrudEntrada
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

    public function add(Entrada $entrada)
    {
        try {
            $sql = "INSERT INTO entrada (armazem_id, motorista_id, produto_id, fornecedor_id, status_id, chave) VALUES (:armazem_id, :motorista_id, :produto_id, :fornecedor_id, :status_id, :chave)";
            $param = array(
                ':armazem_id' => $entrada->getArmazem(),
                ':fornecedor_id' => $entrada->getFornecedor(),
                ':motorista_id' => $entrada->getMotorista(),
                ':produto_id' => $entrada->getProduto(),
                ':status_id' => 2,
                ':chave' => AppUtil::Hash(6)
            );
            var_dump($entrada);
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Entrada $entrada)
    {
        try {
            $sql = "UPDATE entrada SET armazem_id=:armazem_id, motorista_id=:motorista_id, produto_id=:produto_id, fornecedor_id=:fornecedor_id, status_id=:status_id WHERE id=:id;";
            $param = array(
                ':id' => $entrada->getId(),
                ':armazem_id' => $entrada->getArmazem(),
                ':fornecedor_id' => $entrada->getFornecedor(),
                ':motorista_id' => $entrada->getMotorista(),
                ':produto_id' => $entrada->getProduto(),
                ':status_id' => 1
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(Entrada $entrada)
    {
        try {
            $sql = "DELETE FROM entrada WHERE id =:id";
            $param = array(
                ':id' => $entrada->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
