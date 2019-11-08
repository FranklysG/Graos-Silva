<?php

Class Cliente{

    private $id;
    private $nome;
    private $cpf;
    private $rg;
    private $telefone;
    private $email;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $numero;
    private $cep;
    private $estado;
    private $dtcadastro;

    public function setId($id){
        $this->id = (int)$id;
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

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
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

    public function setNumero($numero){
        $this->numero = $numero;
    }
    
    public function getNumero(){
        return $this->numero;
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

}