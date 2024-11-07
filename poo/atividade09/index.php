<?php

include('poupanca.php');

$p = new Poupanca(5, 0);

$c = new Conta(0); 

echo "Conta<br>";

echo $c->depositar(10000); 
echo "<br>";
echo $c->sacar(15000);
echo "<br>";

echo "<br>Poupança<br>";
echo $p->depositar(15000) . "<br>";
echo $p->sacar(20000);

echo "<br><br>Saldo da conta: " . $c->saldo . "<br>";

echo "Saldo da poupança: " . $p->saldo . "<br>";