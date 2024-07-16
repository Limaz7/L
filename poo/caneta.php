<?php

class Caneta {

    //atributos (características)
    var $modelo, $cor, $ponta, $carga, $tampada;

    // métodos (comportamentos)
    function rabiscar(){
        if($this->tampada == true){
            echo "<br>Impossivel rabiscar.";
        }else {
        echo "<br>Estou rabiscando...";
        }
    }

    function tampar(){
        $this->tampada = true;
    }
}

?>