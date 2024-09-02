<?php


function conectar(){
    $conexao = mysqli_connect(
        "localhost",
        "root",
        "",
        "js_l"
    );
    if($conexao === false) {
        echo "Problemas para conectar no banco. Erro: ";
        echo mysqli_connect_error();
        die();
     }
     return $conexao;
}