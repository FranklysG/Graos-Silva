<?php
Class SystemUser{

    private $id;
    private $user;
    private $pass;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass = $pass;
    }
}
?>