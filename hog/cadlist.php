<?php

$mes = $_POST['mes'];
$ano = $_POST['ano'];

include "conexao.php";

$sql = "INSERT INTO lista(mes, ano) VALUE ('$mes', '$ano')";

mysqli_query($conecta, $sql);

if($conecta->error){
    die($conecta->error);
} else {
    header("location: index.php");
}