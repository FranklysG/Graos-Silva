<?php

Class CrudMotorista{

    private $conn;

    public function __construct()
    {
        $this->conn = new Conn;
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function add(Motorista $motorista)
    {
        try {
            $sql = "INSERT INTO motorista (nome, cpf,rg , telefone, cep, email, logradouro, numero, bairro, cidade, estado, veiculo_id) VALUES (:nome, :cpf, :rg, :telefone, :cep, :email, :logradouro, :numero, :bairro, :cidade, :estado, :veiculo_id);";
            $param = array(
                ':nome' => $motorista->getNome(),
                ':cpf' => $motorista->getCpf(),
                ':rg' => $motorista->getRg(),
                ':telefone' => $motorista->getTelefone(),
                ':email' => $motorista->getEmail(),
                ':logradouro' => $motorista->getLogradouro(),
                ':numero' => $motorista->getNumero(),
                ':bairro' => $motorista->getBairro(),
                ':cep' => $motorista->getCep(),
                ':cidade' => $motorista->getCidade(),
                ':estado' => $motorista->getEstado(),
                ':veiculo_id' => $motorista->getVeiculo_id()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function edit(Motorista $motorista)
    {
        try {
            $sql = "UPDATE motorista SET nome=:nome , cpf=:cpf , telefone=:telefone , cep=:cep , email=:email , logradouro=:logradouro , numero=:numero , bairro=:bairro , cidade=:cidade , estado=:estado, veiculo_id=:veiculo_id  WHERE id=:id";
            $param = array(
                ':id' => $motorista->getId(),
                ':nome' => $motorista->getNome(),
                ':cpf' => $motorista->getCpf(),
                ':rg' => $motorista->getRg(),
                ':telefone' => $motorista->getTelefone(),
                ':email' => $motorista->getEmail(),
                ':logradouro' => $motorista->getLogradouro(),
                ':numero' => $motorista->getNumero(),
                ':bairro' => $motorista->getBairro(),
                ':cep' => $motorista->getCep(),
                ':cidade' => $motorista->getCidade(),
                ':estado' => $motorista->getEstado(),
                ':veiculo_id' => $motorista->getVeiculo_id()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

?>