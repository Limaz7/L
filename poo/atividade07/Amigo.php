<?php

include_once('Pessoa.php');
class amigo extends pessoa
{

    public $dia;

    public function __construct($n, $s, $i, $d) {
        parent::__construct($n, $s, $i);
        $this->dia = $d;
    }

    function setDia($d){
        return $this->dia = $d;
    }

    function getDia(){
        return $this->dia;
    }

    function diadeAniversario(){
        return $this->getDia();
    }
}
