<?php

class ControlFornecedor
{

    private $crud;

    public function __construct()
    {
        $this->crud = new Crudfornecedor;
    }

    public function add(Fornecedor $fornecedor)
    {
        if ((strlen(trim($fornecedor->getNome())) > 0) and 
        (strlen(trim($fornecedor->getCnpj())) > 0) and 
        (strlen(trim($fornecedor->getBairro())) > 0) and 
        (strlen(trim($fornecedor->getLogradouro())) > 0) and 
        (strlen(trim($fornecedor->getCep())) > 0) and 
        (strlen(trim($fornecedor->getCidade())) > 0) and 
        (strlen(trim($fornecedor->getEstado())) > 0)
        ) {
            $this->crud->add($fornecedor);
            return true;
        } else {
            return false;
        }
    }

    public function del()
    { }

    public function edit(Fornecedor $fornecedor)
    {
        if ((strlen(trim($fornecedor->getId())) > 0) and 
        (strlen(trim($fornecedor->getNome())) > 0) and 
        (strlen(trim($fornecedor->getCnpj())) > 0) and 
        (strlen(trim($fornecedor->getBairro())) > 0) and 
        (strlen(trim($fornecedor->getLogradouro())) > 0) and 
        (strlen(trim($fornecedor->getCep())) > 0) and 
        (strlen(trim($fornecedor->getCidade())) > 0) and 
        (strlen(trim($fornecedor->getEstado())) > 0)
        ) {
            $this->crud->edit($fornecedor);
            return true;
        } else {
            return false;
        }
    }

    public function search($sql)
    { }
}
