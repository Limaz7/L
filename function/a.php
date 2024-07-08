<?php

function soma ($n1, $n2){
    $soma =  $n1 + $n2;
    if($soma < 0)
        $soma = 0;

        return $soma;
    
}


function maior ($n1, $n2, $n3){
    if($n1 > $n2 and $n1 > $n3){
        return $n1;
    } elseif ($n2 > $n1 and $n2 > $n3){
        return $n2;
    } elseif ($n3 > $n1 and $n3 > $n2){
        return $n3;
    } else {
        echo "Não existe um número maior";
    }
}


function mr ($n1, $n2, $n3){
    if($n1 > $n2 and $n2 > $n3){
        $result = "Verdadeiro";
        return $result;
    } else {
        $result = "Falso";
        return $result;
    }
}


function vi ($dia, $mes, $ano) {
    if ($ano > 1900 and $ano < 2024){
        $resultado = "Válido";
        return $resultado;
    } else {
        $resultado = "Invalido";
        return $resultado;
    }
}


function temp ($temp, $grau){
    if ($grau = 1){
        $resultado = $temp * 1.8 + 32;
        return $resultado;
    } elseif ($grau = 2){
        $resultado = ($temp - 32) / 1.8;
        return $resultado;
    }
}

function impr ($)

?>