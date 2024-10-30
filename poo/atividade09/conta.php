<?php

class Conta {
    
    public $saldo;

    public function __construct($s) {
        $this->saldo = $s;
    }

    function depositar($novsaldo) {
        $this->saldo += $novsaldo;
        return $this->saldo; 
    }

    function sacar($novsaldo) {
        $this->saldo -= $novsaldo; 
        return $this->saldo;
    }
}