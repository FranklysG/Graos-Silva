<?php

class ControlEntrada
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudEntrada;
    }

    public function add(Entrada $entrada)
    {
        if ((strlen(trim($entrada->getProduto())) > 0) and 
        (strlen(trim($entrada->getFornecedor())) > 0) and 
        (strlen(trim($entrada->getArmazem())) > 0) and 
        (strlen(trim($entrada->getMotorista())) > 0)) {
            $this->crud->add($entrada);
            return true;
        } else {
            return false;
        }
    }

    public function del(Entrada $entrada)
    { 
        if((strlen(trim($entrada->getId())) > 0)){
            $this->crud->del($entrada);
        }
    }

    public function edit(Entrada $entrada){
        if ((strlen(trim($entrada->getId())) > 0) and 
        (strlen(trim($entrada->getProduto())) > 0) and 
        (strlen(trim($entrada->getFornecedor())) > 0) and 
        (strlen(trim($entrada->getArmazem())) > 0) and 
        (strlen(trim($entrada->getChave())) > 0) and 
        (strlen(trim($entrada->getMotorista())) > 0)) {
            $chave = $entrada->getChave();
            $conn = new Conn;
            $sql = "select * from entrada where chave ='{$chave}'";
            $row = $conn->sqlRows($sql);
            if($row){
                $this->crud->edit($entrada);
                $entrada->setChave(null);
            }else{
                $_SESSION['error'] = 0;
            }
            return true;
        } else {
            return false;
        }
     }

    public function search($sql)
    { }
}
