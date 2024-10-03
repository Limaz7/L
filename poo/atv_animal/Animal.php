<?php

class animal
{
    public $nome;

    public function __construct($n)
    {
        $this->nome = $n;
    }

    public function dormir()
    {
        echo "O $this->nome está dormindo!";
    }
}
