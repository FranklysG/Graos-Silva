<?php

class CrudCliente
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

    public function add(Cliente $cliente)
    {
        try {
            $sql = "INSERT INTO cliente (nome, cpf, telefone, cep, email, logradouro, bairro, cidade, estado) VALUES (:nome, :cpf, :telefone, :cep, :email, :logradouro, :bairro, :cidade, :estado);";
            $param = array(
                ':nome' => $cliente->getNome(),
                ':cpf' => $cliente->getCpf(),
                ':telefone' => $cliente->getTelefone(),
                ':email' => $cliente->getEmail(),
                ':logradouro' => $cliente->getLogradouro(),
                ':bairro' => $cliente->getBairro(),
                ':cep' => $cliente->getCep(),
                ':cidade' => $cliente->getCidade(),
                ':estado' => $cliente->getEstado()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Cliente $cliente)
    {
        try {
            $sql = "UPDATE cliente SET nome=:nome , cpf=:cpf , telefone=:telefone , cep=:cep , email=:email , logradouro=:logradouro , bairro=:bairro , cidade=:cidade , estado=:estado  WHERE id=:id";
            $param = array(
                ':id' => $cliente->getId(),
                ':nome' => $cliente->getNome(),
                ':cpf' => $cliente->getCpf(),
                ':telefone' => $cliente->getTelefone(),
                ':email' => $cliente->getEmail(),
                ':logradouro' => $cliente->getLogradouro(),
                ':bairro' => $cliente->getBairro(),
                ':cep' => $cliente->getCep(),
                ':cidade' => $cliente->getCidade(),
                ':estado' => $cliente->getEstado()
            );
            var_dump($sql);
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(Cliente $cliente){
        try {
            $sql = "DELETE FROM cliente WHERE id =:id";
            $param = array(
                ':id' => $cliente->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
