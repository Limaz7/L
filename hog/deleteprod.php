<?php

$id = $_GET["id_lista"];

include "conexao.php";

$sql = "DELETE FROM lista WHERE id_lista = '$id'";

mysqli_query($conecta, $sql);

if($conecta->error){
    die("erro".$conecta->error);
} else {
    header("location: index.php");
}