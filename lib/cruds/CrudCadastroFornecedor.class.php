<?php

class CrudFornecedor
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

    public function add(Fornecedor $fornecedor)
    {
        try {
            $sql = "INSERT INTO fornecedor (nome, cnpj, logradouro, bairro, cidade, cep, estado) VALUES (:nome, :cnpj, :logradouro, :bairro, :cidade, :cep, :estado)";
            $param = array(
                ':nome' => $fornecedor->getNome(),
                ':cnpj' => $fornecedor->getCnpj(),
                ':logradouro' =>$fornecedor->getLogradouro(),
                ':bairro' => $fornecedor->getBairro(),
                ':cidade' => $fornecedor->getCidade(),
                ':cep' => $fornecedor->getCep(),
                ':estado' => $fornecedor->getEstado()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Fornecedor $fornecedor)
    {
        try {
            $sql = "UPDATE fornecedor SET nome=:nome , cnpj=:cnpj , logradouro=:logradouro , bairro=:bairro , cidade=:cidade , cep=:cep , estado=:estado  WHERE id=:id;
            ";
            $param = array(
                ':id' => $fornecedor->getId(),
                ':nome' => $fornecedor->getNome(),
                ':cnpj' => $fornecedor->getCnpj(),
                ':logradouro' =>$fornecedor->getLogradouro(),
                ':bairro' => $fornecedor->getBairro(),
                ':cep' => $fornecedor->getCep(),
                ':cidade' => $fornecedor->getCidade(),
                ':estado' => $fornecedor->getEstado()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
