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
            $sql = "INSERT INTO cliente (nome, cpf,rg , telefone, cep, email, logradouro, numero, bairro, cidade, estado) VALUES (:nome, :cpf, :rg, :telefone, :cep, :email, :logradouro, :numero, :bairro, :cidade, :estado);";
            $param = array(
                ':nome' => $cliente->getNome(),
                ':cpf' => $cliente->getCpf(),
                ':rg' => $cliente->getRg(),
                ':telefone' => $cliente->getTelefone(),
                ':email' => $cliente->getEmail(),
                ':logradouro' => $cliente->getLogradouro(),
                ':numero' => $cliente->getNumero(),
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
            $sql = "UPDATE cliente SET nome=:nome , cpf=:cpf , telefone=:telefone , cep=:cep , email=:email , logradouro=:logradouro , numero=:numero , bairro=:bairro , cidade=:cidade , estado=:estado  WHERE id=:id";
            $param = array(
                ':id' => $cliente->getId(),
                ':nome' => $cliente->getNome(),
                ':cpf' => $cliente->getCpf(),
                ':telefone' => $cliente->getTelefone(),
                ':email' => $cliente->getEmail(),
                ':logradouro' => $cliente->getLogradouro(),
                ':numero' => $cliente->getNumero(),
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
}
