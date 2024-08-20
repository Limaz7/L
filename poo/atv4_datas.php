<?php

class data
{
    private $dia;
    private $mes;
    private $ano;

    public function __construct($mes, $dia, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function setDia($dia)
    {
        return $this->dia = $dia;
    }

    public function setMes($mes)
    {
        return $this->mes = $mes;
    }

    public function setAno($ano)
    {
        return $this->ano = $ano;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function exibirData()
    {
        return $this->getDia() . "/" . $this->getMes() . "/" . $this->getAno();
    }

    public function avancarData() {}
}
