<?php

class CrudArmazem
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

    public function add(Armazem $armazem)
    {
        try {
            $sql = "INSERT INTO armazen (nome, cnpj, logradouro, bairro, cidade, cep, estado) VALUES (:nome, :cnpj, :logradouro, :bairro, :cidade, :cep, :estado)";
            $param = array(
                ':nome' => $armazem->getNome(),
                ':cnpj' => $armazem->getCnpj(),
                ':logradouro' =>$armazem->getLogradouro(),
                ':bairro' => $armazem->getBairro(),
                ':cidade' => $armazem->getCidade(),
                ':cep' => $armazem->getCep(),
                ':estado' => $armazem->getEstado()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Armazem $armazem)
    {
        try {
            $sql = "UPDATE armazen SET nome=:nome , cnpj=:cnpj , logradouro=:logradouro , bairro=:bairro , cidade=:cidade , cep=:cep , estado=:estado  WHERE id=:id;
            ";
            $param = array(
                ':id' => $armazem->getId(),
                ':nome' => $armazem->getNome(),
                ':cnpj' => $armazem->getCnpj(),
                ':logradouro' =>$armazem->getLogradouro(),
                ':bairro' => $armazem->getBairro(),
                ':cep' => $armazem->getCep(),
                ':cidade' => $armazem->getCidade(),
                ':estado' => $armazem->getEstado()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
