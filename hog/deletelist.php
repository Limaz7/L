<?php

$mes = $_GET["mes"];
$ano = $_GET["ano"];

include "conexao.php";

$sql = "DELETE FROM lista WHERE mes = '$mes' and ano = '$ano'";

mysqli_query($conecta, $sql);

if($conecta->error){
    die("erro".$conecta->error);
} else {
    header("location: index.php");
}
