<?php

include_once("Pessoa.php");
class funcionario extends pessoa
{

    public $matricula;
    public $salario;

    function __construct($m, $sal, $n, $s, $i)
    {
        parent::__construct($n, $s, $i);
        $this->matricula = $m;
        $this->salario = $sal;
    }

    function setSalario($sal)
    {
        if ($this->salario >= 0) {
            return $this->salario = $sal;
        }
    }

    function getSalarioPrPa()
    {
        return $this->salario * 0.6;
    }

    function getSalarioSePa()
    {
        return $this->salario * 0.4;
    }
}
