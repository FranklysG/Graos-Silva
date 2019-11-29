<?php

class ControlSystemUser
{

    private $crud;

    public function __construct()
    {
        $this->crud = new CrudSystemUser;
    }

    public function add(SystemUser $user)
    {
        if ((strlen(trim($user->getLogin())) > 0) and 
        (strlen(trim($user->getApelido())) > 0) and 
        (strlen(trim($user->getPass())) > 0)) {
            $this->crud->add($user);
            return true;
        } else {
            return false;
        }
    }

}
