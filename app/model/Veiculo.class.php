<?php
Class Veiculo{

    private $id;
    private $modelo;
    private $cor;
    private $placa;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }

    public function getPlaca(){
        return $this->placa;
    }
}