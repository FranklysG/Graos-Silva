<?php

class ControlProduto
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudProduto;
    }

    public function add(Produto $produto)
    {
        if ((strlen(trim($produto->getNome())) > 0) and 
        (strlen(trim($produto->getTipo())) > 0) and 
        (strlen(trim($produto->getQtde())) > 0)
        //(strlen(trim($produto->getNotaFiscal())) > 0)
        ) {
            $this->crud->add($produto);
            
            return true;
        } else {
            return false;
        }
    }

    public function del(Produto $produto)
    { 
        if((strlen(trim($produto->getId())) > 0)){
            $this->crud->del($produto);
        }
    }

    public function edit(Produto $produto)
    {
        if ((strlen(trim($produto->getId())) > 0) and 
        (strlen(trim($produto->getNome())) > 0) and 
        (strlen(trim($produto->getTipo())) > 0) and 
        (strlen(trim($produto->getQtde())) > 0)
        //(strlen(trim($produto->getNotaFiscal())) > 0)
        ) {
            $this->crud->edit($produto);
            return true;
        } else {
            return false;
        }
    }

    public function search($sql)
    { }
}
