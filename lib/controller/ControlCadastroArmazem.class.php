<?php

class ControlArmazem
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudArmazem;
    }

    public function add(Armazem $armazem)
    {
        if ((strlen(trim($armazem->getNome())) > 0) and 
        (strlen(trim($armazem->getCnpj())) > 0) and 
        (strlen(trim($armazem->getBairro())) > 0) and 
        (strlen(trim($armazem->getLogradouro())) > 0) and 
        (strlen(trim($armazem->getCep())) > 0) and 
        (strlen(trim($armazem->getCidade())) > 0) and 
        (strlen(trim($armazem->getEstado())) > 0)
        ) {
            $this->crud->add($armazem);
            return true;
        } else {
            return false;
        }
    }

    public function del()
    { }

    public function edit(Armazem $armazem)
    {
        if ((strlen(trim($armazem->getId())) > 0) and 
        (strlen(trim($armazem->getNome())) > 0) and 
        (strlen(trim($armazem->getCnpj())) > 0) and 
        (strlen(trim($armazem->getBairro())) > 0) and 
        (strlen(trim($armazem->getLogradouro())) > 0) and 
        (strlen(trim($armazem->getCep())) > 0) and 
        (strlen(trim($armazem->getCidade())) > 0) and 
        (strlen(trim($armazem->getEstado())) > 0)
        ) {
            $this->crud->edit($armazem);
            return true;
        } else {
            return false;
        }
    }

    public function search($sql)
    { }
}
