<?php

Class Entrada{

    private $id;
    private $armazem;
    private $motorista;
    private $produto;
    private $fornecedor;
    private $chave;
    private $chave_id;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getArmazem(){
        return $this->armazem;
    }

    public function setArmazem($armazem){
        $this->armazem = $armazem;
    }

    public function getMotorista(){
        return $this->motorista;
    }

    public function setMotorista($motorista){
        $this->motorista = $motorista;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

    public function getFornecedor(){
        return $this->fornecedor;
    }

    public function setFornecedor($fornecedor){
        $this->fornecedor = $fornecedor;
    }

    public function getChave(){
        return $this->chave;
    }

    public function setChave($chave){
        $this->chave = $chave;
    }

    public function getChaveId(){
        return $this->chave_id;
    }

    public function setChaveId($chave_id){
        $this->chave_id = $chave_id;
    }
}