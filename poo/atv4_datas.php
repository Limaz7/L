<?php

class data
{
    private $dia;
    private $mes;
    private $ano;

    public function __construct($dia, $mes, $ano)
    {
        if ($dia > 31 or $dia < 1 or $mes > 12 or $mes < 1) {
            echo "Esse dia e mes não existem <br>";
            die();
        } else {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }
    }

    public function setDia($dia)
    {
        if ($dia > 31 or $dia < 1) {
            echo "Esse dia não existe!";
            die();
        } else {
            return $this->dia = $dia;
        }
    }

    public function setMes($mes)
    {
        if ($mes > 12 or $mes < 1) {
            echo "Esse mês não existe!";
            die();
        } else {
            return $this->mes = $mes;
        }
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

    public function avancarData()
    {
        $avancar = $this->getDia();
        $avancar++;

        if ($avancar > 31) {
            $mes = $this->getMes();
            $mes++;

            if ($mes > 12) {
                $mes = 1;
                $this->setMes($mes);
                $this->setDia(1);
                $ano = $this->getAno();
                $ano++;
                $this->setAno($ano);
            }

            echo $this->exibirData();
            die();
        } else {
            $this->setDia($avancar);
        }
    }
}
