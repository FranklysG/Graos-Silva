<?php
include('../con.class.php');

Class CrudVeiculo{

    private $conn;

    public function __construct(){
        $this->conn = new Conn;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
    
    public function add(){
        
    }

    public function del(){

    }

    public function edit(){

    }

    public function show($sql){

    }

}