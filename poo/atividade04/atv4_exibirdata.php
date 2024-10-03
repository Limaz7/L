<?php

include("atv4_datas.php");

$d1 = new data(31, 8, 2024);

echo "<pre>";
print_r($d1);
echo "</pre>";
echo "<br>";

echo "Data:<br>";
echo $d1->exibirData() . "<br>";

echo "<br>Data atualizada:<br>";
$d1->setDia(31);
$d1->setMes(12);
echo $d1->exibirData() . "<br>";

echo "<br>Dia posterior:<br>";
$d1->avancarData();
echo $d1->exibirData();
