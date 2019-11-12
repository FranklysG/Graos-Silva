<?php

Class Produto{

    private $id;
    private $nome;
    private $tipo;
    private $qtde;
    private $nota_fiscal;
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
    
    public function setNotaFiscal($nota_Fiscal){
        $this->notaFiscal = $nota_Fiscal;
    }

    public function getNotaFiscal(){
        return $this->nota_fiscal;
    }

    public function setDtcadastro($dtcadastro){
        $this->dtcadastro = $dtcadastro;
    }
    
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
}