<?php
namespace App\model;

class Carro{
    private $Marca;
    private $Ano;
    private $cor;

    public function __construct($Marca, $Ano, $Cor){
        $this->marca = $Marca;
        $this->ano = $Ano;
        $this->cor = $Cor;
    }
    public function getInfo(){
        return "Carro: {$this->marca}, {$this->ano}, {$this->cor}"; 
    }
    public function rodar(){
        echo $this->marca . "Está rodando!\n";
    }
}