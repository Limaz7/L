<?php

$desc = $_POST["desc"];
$quant = $_POST["quant"];
$cat = $_POST["cat"];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

include"conexao.php";

$sql = "INSERT INTO lista(descricao, quantidade, categoria, mes, ano) VALUES ('$desc', '$quant', '$cat', '$mes', '$ano')";

mysqli_query($conecta, $sql);

if($conecta->error){
    die("erro".$conecta->error);
} else {
    header("location: index.php");
}