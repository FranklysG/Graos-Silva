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
            $sql = "INSERT INTO produto (nome, tipo, qtde,nota_fisca, produto_nome_id) VALUES (:nome, :tipo, :qtde,:nota_fiscal)";
            $param = array(
                ':nome' => $produto->getNome(),
                ':tipo' => $produto->getTipo(),
                ':qtde' =>$produto->getQtde(),
                ':nota_fiscal' =>$produto->getNotaFiscal()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Produto $produto)
    {
        try {
            $sql = "UPDATE produto SET nome=:nome , tipo=:tipo , qtde=:qtde, nota_fiscal=:nota_fiscal  WHERE id=:id";            ;
            $param = array(
                ':id' => $produto->getId(),
                ':nome' => $produto->getNome(),
                ':tipo' => $produto->getTipo(),
                ':qtde' =>$produto->getQtde(),
                ':nota_fiscal' =>$produto->getNotaFiscal()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
