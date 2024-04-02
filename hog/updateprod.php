<?php

$id = $_POST["id_lista"];
$desc = $_POST["desc"];
$quant = $_POST["quant"];
$cat = $_POST["cat"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


include "conexao.php";

$sql = "UPDATE `lista` SET `id_lista`='$id',`ano`='$ano',`mes`='$mes',`descricao`='$desc',`quantidade`='$quant',`categoria`='$cat' WHERE id_lista = '$id'";

mysqli_query($conecta, $sql);

if($connect->error){
    die("erro".$connect->error);
} else {
    header("location: index.php");
}

?>