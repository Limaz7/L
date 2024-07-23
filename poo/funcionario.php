<?php

class Funcionario
{
    public $nome = "Lázaro";
    protected $salario = 22;
    private $rg = 735285834;

    function exibeSalario()
    {
        echo "<br>" . "R$ " .  $this->salario;
    }

    public function alterarSalario($sal)
    {
        if ($sal >= 0){
            $this->salario = $sal;
            $this->exibeSalario();
        } 
    }
}
 
$f = new Funcionario;
echo $f->nome . "<br>";
$f->alterarSalario(13);

echo "<pre>";
print_r($f);
echo "</pre>";