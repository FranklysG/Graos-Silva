<?php

Class Armazem{

    private $id;
    private $nome;
    private $cnpj;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $cep;
    private $estado;
    private $dtcadastro;

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

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getCnpj(){
        return $this->cnpj;
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
}