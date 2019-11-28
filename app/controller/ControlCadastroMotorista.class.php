<?php

class ControlMotorista
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudMotorista;
    }

    public function add(Motorista $motorista)
    {
        if ((strlen(trim($motorista->getNome())) > 0) and 
        (strlen(trim($motorista->getCpf())) > 0) and 
        (strlen(trim($motorista->getRg())) > 0) and 
        (strlen(trim($motorista->getLogradouro())) > 0) and 
        (strlen(trim($motorista->getBairro())) > 0) and 
        (strlen(trim($motorista->getCidade())) > 0) and
        (strlen(trim($motorista->getCep())) > 0) and 
        (strlen(trim($motorista->getEstado())) > 0) and
        (strlen(trim($motorista->getVeiculo_id())) > 0)
        ) {
            $this->crud->add($motorista);
            return true;
        } else {
            return false;
        }
    }

    public function del(Motorista $motorista)
    { 
        if((strlen(trim($motorista->getId())) > 0)){
            $this->crud->del($motorista);
        }
    }

    public function edit(Motorista $motorista)
    {
        if ((strlen(trim($motorista->getId())) > 0) and
        (strlen(trim($motorista->getNome())) > 0) and 
        (strlen(trim($motorista->getCpf())) > 0) and 
        (strlen(trim($motorista->getRg())) > 0) and 
        (strlen(trim($motorista->getLogradouro())) > 0) and 
        (strlen(trim($motorista->getBairro())) > 0) and 
        (strlen(trim($motorista->getCidade())) > 0) and 
        (strlen(trim($motorista->getEstado())) > 0) and
        (strlen(trim($motorista->getCep())) > 0) and
        (strlen(trim($motorista->getVeiculo_id())) > 0)
        ) {
            var_dump($motorista);
            $this->crud->edit($motorista);
            return true;
        } else {
            return false;
        }
    }

    public function search($sql)
    { }
}
