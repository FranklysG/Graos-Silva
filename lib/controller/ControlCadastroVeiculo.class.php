<?php

class ControlVeiculo
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudVeiculo;
    }

    public function add(Veiculo $veiculo)
    {
        if ((strlen(trim($veiculo->getMarca())) > 0) and 
        (strlen(trim($veiculo->getCor())) > 0) and 
        (strlen(trim($veiculo->getPlaca())) > 0)) {
            $this->crud->add($veiculo);
            return true;
        } else {
            return false;
        }
    }

    public function del()
    { }

    public function edit(Veiculo $veiculo){
        if ((strlen(trim($veiculo->getId())) > 0) and
        (strlen(trim($veiculo->getMarca())) > 0) and 
        (strlen(trim($veiculo->getCor())) > 0) and 
        (strlen(trim($veiculo->getPlaca())) > 0)) {
            $this->crud->edit($veiculo);
            return true;
        } else {
            return false;
        }
     }

    public function search($sql)
    { }
}
