<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'turismo';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao === false){
    echo "Problemas para conectar o banco. Erro: ";
    echo mysqli_connect_error();
}