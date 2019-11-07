<?php

Class Produto{

    private $id;
    private $nome;
    private $tipo;
    private $qtde;
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

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setQtde($qtde){
        $this->qtde = $qtde;
    }

    public function getQtde(){
        return $this->qtde;
    }

    public function setDtcadastro($dtcadastro){
        $this->dtcadastro = $dtcadastro;
    }
    
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
}