<?php

include_once('conta.php');

class poupanca extends conta{

    public $diaRendimento;

    function __construct($dr, $s)
    {
       parent::__construct($s); 
       $this->diaRendimento = $dr;
    }

    function setSaldo($s){
        if($this->saldo > 0){
            return $this->saldo = $s;
        }
    }

    function sacar($novsaldo)
    {
        if($novsaldo < $this->saldo){
            $this->saldo -= $novsaldo;
            return $this->saldo;
        } else{
            echo "Você não pode sacar esse valor";
        }
    }
}