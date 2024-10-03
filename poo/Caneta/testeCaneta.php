<?php

include_once "caneta.php";

// Cria o objeto da classe caneta
$c1 = new Caneta; 

// Define os atributos
$c1->cor = 'Azul';
$c1->ponta = 0.5;
$c1->tampada = false;

// Acessa os metodos
$c1->tampar();
$c1->rabiscar();


echo "<pre>"; 
print_r($c1);
echo "</pre>";

?>