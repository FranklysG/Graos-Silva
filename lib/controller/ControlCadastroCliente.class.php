<?php

class ControlCliente
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudCliente;
    }

    public function add(Cliente $cliente)
    {
        if ((strlen(trim($cliente->getNome())) > 0) and 
        (strlen(trim($cliente->getCpf())) > 0) and  
        (strlen(trim($cliente->getTelefone())) > 0) and 
        (strlen(trim($cliente->getEmail())) > 0) and 
        (strlen(trim($cliente->getLogradouro())) > 0) and 
        (strlen(trim($cliente->getNumero())) > 0) and 
        (strlen(trim($cliente->getBairro())) > 0) and 
        (strlen(trim($cliente->getCep())) > 0) and 
        (strlen(trim($cliente->getCidade())) > 0) and 
        (strlen(trim($cliente->getEstado())) > 0)
        ) {
            $this->crud->add($cliente);
            return true;
        } else {
            return false;
        }
    }

    public function del()
    { }

    public function edit(Cliente $cliente)
    {
        if ((strlen(trim($cliente->getId())) > 0) and 
        (strlen(trim($cliente->getNome())) > 0) and 
        (strlen(trim($cliente->getCpf())) > 0) and 
        (strlen(trim($cliente->getTelefone())) > 0) and 
        (strlen(trim($cliente->getEmail())) > 0) and 
        (strlen(trim($cliente->getLogradouro())) > 0) and 
        (strlen(trim($cliente->getNumero())) > 0) and 
        (strlen(trim($cliente->getBairro())) > 0) and 
        (strlen(trim($cliente->getCep())) > 0) and 
        (strlen(trim($cliente->getCidade())) > 0) and 
        (strlen(trim($cliente->getEstado())) > 0)
        ) {
            $this->crud->edit($cliente);
            return true;
        } else {
            return false;
        }
    }

    public function search($sql)
    { }
}
