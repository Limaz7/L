<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    function exibecoisas()
    {
        $this->descricao = 'Chocolate';
        $this->estoque = 10;
        $this->preco = 8;
    }

    function exibecoisass()
    {
        $this->descricao = 'Café';
        $this->estoque = 20;
        $this->preco = 4;
    }
}


$p1 = new Produto;
$p1->exibecoisas();

$p2 = new Produto;
$p2->exibecoisass();

echo "<pre>";
print_r($p1);
echo "</pre>";

echo "<pre>";
print_r($p2);
echo "</pre>";
