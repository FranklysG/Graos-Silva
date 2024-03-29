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
            $sql = "INSERT INTO motorista (nome, cpf,rg, logradouro, bairro, cidade, cep, estado, veiculo_id) VALUES (:nome, :cpf, :rg, :logradouro, :bairro, :cidade, :cep,:estado, :veiculo_id);";
            $param = array(
                ':nome' => $motorista->getNome(),
                ':cpf' => $motorista->getCpf(),
                ':rg' => $motorista->getRg(),
                ':logradouro' => $motorista->getLogradouro(),
                ':bairro' => $motorista->getBairro(),
                ':cidade' => $motorista->getCidade(),
                ':cep' => $motorista->getCep(),
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
            $sql = "UPDATE motorista SET nome=:nome , cpf=:cpf, rg=:rg, logradouro=:logradouro , bairro=:bairro , cidade=:cidade , cep=:cep, estado=:estado, veiculo_id=:veiculo_id  WHERE id=:id";
            $param = array(
                ':id' => $motorista->getId(),
                ':nome' => $motorista->getNome(),
                ':cpf' => $motorista->getCpf(),
                ':rg' => $motorista->getRg(),
                ':logradouro' => $motorista->getLogradouro(),
                ':bairro' => $motorista->getBairro(),
                ':cidade' => $motorista->getCidade(),
                ':cep' => $motorista->getCep(),
                ':estado' => $motorista->getEstado(),
                ':veiculo_id' => $motorista->getVeiculo_id()
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function del(Motorista $motorista){
        try {
            $sql = "DELETE FROM motorista WHERE id =:id";
            $param = array(
                ':id' => $motorista->getId(),
            );
            return $this->conn->sqlOne($sql, $param);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

?>