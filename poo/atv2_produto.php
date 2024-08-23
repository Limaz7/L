<?php

class produto
{
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($unidades)
    {
        if ($unidades >= 0) {
            $this->estoque = $this->estoque + $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if ($unidades >= 0) {
            $this->estoque = $this->estoque - $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if ($percentual >= 0) {
            $this->preco = $this->preco + ($this->preco * $percentual / 100);
        }
    }
}
