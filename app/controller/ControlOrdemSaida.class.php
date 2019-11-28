<?php

class ControlSaida
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudSaida;
    }

    public function add(Saida $saida)
    {
        if ((strlen(trim($saida->getProduto())) > 0) and 
        (strlen(trim($saida->getCliente())) > 0) and 
        (strlen(trim($saida->getArmazem())) > 0) and 
        (strlen(trim($saida->getMotorista())) > 0)) {
            $this->crud->add($saida);
            return true;
        } else {
            return false;
        }
    }

    public function del(Saida $saida)
    { 
        if((strlen(trim($saida->getId())) > 0)){
            $this->crud->del($saida);
        }
    }

    public function edit(Saida $saida){
        if ((strlen(trim($saida->getId())) > 0) and 
        (strlen(trim($saida->getProduto())) > 0) and 
        (strlen(trim($saida->getCliente())) > 0) and 
        (strlen(trim($saida->getArmazem())) > 0) and 
        (strlen(trim($saida->getMotorista())) > 0)) {
            $this->crud->edit($saida);
            return true;
        } else {
            return false;
        }
     }

    public function search($sql)
    { }
}
