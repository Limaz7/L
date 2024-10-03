<?php

include_once ('Animal.php');
class cachorro extends animal
{
    public function __construct($n)
    {
        parent::__construct($n);
    }

    public function latir()
    {
        echo "O $this->nome está latindo!";
    }
}
