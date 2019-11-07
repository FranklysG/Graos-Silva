<?php

Class Motorista{

    private $id;
    private $nome;
    private $cpf;
    private $rg;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $cep;
    private $estado;
    private $dtcadastro;
    private $veiculo_id;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    
    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    
    public function getBairro(){
        return $this->bairro;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    
    public function getCidade(){
        return $this->cidade;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }
    
    public function getCep(){
        return $this->cep;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
    
    public function getEstado(){
        return $this->estado;
    }

    public function setDtcadastro($dtcadastro){
        $this->dtcadastro = $dtcadastro;
    }
    
    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setVeiculo_id($veiculo_id){
        $this->veiculo_id = $veiculo_id;
    }
    
    public function getVeiculo_id(){
        return $this->veiculo_id;
    }
}