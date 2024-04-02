<?php

$desc = $_POST["desc"];
$quant = $_POST["quant"];
$cat = $_POST["cat"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


include"conexao.php";

$sql = "INSERT INTO lista(ano, mes, descricao, quantidade, categoria) VALUES ('$ano', '$mes', '$desc', '$quant', '$cat')";

mysqli_query($conecta, $sql);

if($conecta->error){
    die("erro".$conecta->error);
} else {
    header("location: index.php");
}


?>