<?php

$id = $_POST["id"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


include "conexao.php";

$sql = "UPDATE `lista` SET `id_lista`='$id',`ano`='$ano',`mes`='$mes' WHERE id_lista = '$id'";

mysqli_query($conecta, $sql);

if($conecta->error){
    die("erro".$conecta->error);
} else {
    header("location: index.php");
}