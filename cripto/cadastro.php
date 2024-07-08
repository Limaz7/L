<?php

require_once "conecta.php";

if($_POST){

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_ARGON2I);

    $sql = "INSERT INTO user(nome, senha) 
    VALUES ('$nome', '$hash')";

    mysqli_query($conecta, $sql);

    if($conecta->error){
    die("erro".$conecta->error);
    } else {
    header("location: index.php");
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="" method="post">
    <h3> Cadastre-se </h3>
    Nome:<input type="text" name="nome"><br><br>
    Senha:<inpuT type="password" name="senha"><br><br>
    <input type="submit" value="Enviar">

    </form>
</body>
</html>