<?php

class CrudProduto
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

    public function add(Produto $produto)
    {
        try {
            $sql = "INSERT INTO produto (nome, tipo, qtde) VALUES (:nome, :tipo, :qtde)";
            $param = array(
                ':nome' => $produto->getNome(),
                ':tipo' => $produto->getTipo(),
                ':qtde' =>$produto->getQtde()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Produto $produto)
    {
        try {
            $sql = "UPDATE produto SET nome=:nome , tipo=:tipo , qtde=:qtde  WHERE id=:id";            ;
            $param = array(
                ':id' => $produto->getId(),
                ':nome' => $produto->getNome(),
                ':tipo' => $produto->getTipo(),
                ':qtde' =>$produto->getQtde()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(Produto $produto){
        try {
            $sql = "DELETE FROM produto WHERE id =:id";
            $param = array(
                ':id' => $produto->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
