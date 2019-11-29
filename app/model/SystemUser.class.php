<?php
Class SystemUser{

    private $id;
    private $login;
    private $pass;
    private $apelido;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }

    public function getApelido(){
        return $this->apelido;
    }

    public function setApelido($apelido){
        $this->apelido = $apelido;
    }
}
?>