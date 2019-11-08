<?php

class ControlVeiculo
{

    private $crudVeiculo;

    public function __construct()
    {
        $this->crudVeiculo = new crudVeiculo;
    }

    public function add(Veiculo $veiculo)
    {
        if ((strlen(trim($veiculo->getMarca())) > 0) and 
        (strlen(trim($veiculo->getCor())) > 0) and 
        (strlen(trim($veiculo->getPlaca())) > 0)) {
            $this->crudVeiculo->add($veiculo);
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
            $this->crudVeiculo->edit($veiculo);
            return true;
        } else {
            return false;
        }
     }

    public function search($sql)
    { }
}
