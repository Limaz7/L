<?php


include_once ('Amigo.php');
include_once ('funcionario.php');

$d = new amigo('Martin', 'Macha', '15', '22');

echo "<pre>";
print_r($d);
echo "</pre>";

$d->setDia(15);

echo "Nova data de aniversario: <br>"; 
echo $d->diadeAniversario();
echo "<br>";

echo "Sexo alterado: <br>";
echo $d->setSexo('femea');

$f = new funcionario('123456', '1000', 'lazaro', 'masculino', '10');

echo "<pre>";
print_r($f);
echo "</pre>";

$f->setSalario('2000');