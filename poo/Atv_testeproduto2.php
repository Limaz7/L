<?php

include_once "Atv_produto2.php";

$p1 = new produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;

echo "O estoque de {$p1->descricao} é {$p1->estoque}. <br>";
echo "O preço de {$p1->descricao} é R$ {$p1->preco}. <br> <hr>";

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

echo "O estoque de {$p1->descricao} é {$p1->estoque}. <br>";
echo "O preço de {$p1->descricao} é R$ {$p1->preco}. <br> <hr>";
