<?php

Class Saida{

    private $id;
    private $armazem;
    private $motorista;
    private $produto;
    private $cliente;

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

    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
}