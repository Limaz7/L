<?php

include_once('Pessoa.php');
class amigo extends pessoa
{

    public $dia;

    public function __construct($n, $s, $i) {
        parent::__construct($n);
        parent::__construct($s);
        parent::__construct($i);
    }

    function getDia(){
        $this->dia;
    }

    function setDia($d){
        $this->dia = $d;
    }

    function diadeAniversario(){

    }
}
