<?php
Class Veiculo{

    private $id;
    private $marca;
    private $cor;
    private $placa;

    public function setId($id){
        $this->id = (int)$id;
    }

    public function getId(){
        return $this->id;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
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