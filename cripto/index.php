<?php

session_start();

require_once "conecta.php";

if($_POST){

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $_SESSION['nome'] = $nome; 

    $sql = "SELECT * FROM user WHERE nome='$nome'";

    $result = mysqli_query($conecta, $sql);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['senha'];

    $nivel = $user['nivel'];

    if(password_verify($senha, $hash)){
        if ($nivel == 1){
            header('location: admin.php');
        }
    
        if ($nivel == 0){
            header('location: comum.php');
        }
    } else {
        echo "Senha inválida! Tente novamente.";
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action=" " method="post">

    <h3> Faça o login </h3>
    Nome:<input type="text" name="nome"><br><br>
    Senha:<input type="password" name="senha"><br><br>
    <input type="submit" value="Enviar"> <br><br>
    <a href="cadastro.php">Cadastre-se</A>

    </form>
</body>
</html>