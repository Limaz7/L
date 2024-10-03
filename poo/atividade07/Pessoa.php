<?php

class pessoa
{

    public $nome;
    public $sexo;
    public $idade;

    public function __construct($n, $s, $i)
    {
        $this->nome = $n;
        $this->sexo = $s;
        $this->idade = $i;
    }

    function getNome(){
        return $this->nome;
    }

    function getSexo(){
        return $this->sexo;
    }

    function getIdade(){
        return $this->idade;
    }

    function setNome($n){
        return $this->nome = $n;
    }

    function setSexo($s){
        return $this->sexo = $s;  
    }

    function setIdade($i){
        return $this->idade = $i;
    }

    
}
