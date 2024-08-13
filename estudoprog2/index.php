<?php

session_start();

if ($_POST) {
    $nome = $_POST['nome'];
    $_SESSION['nome'] = $nome;
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_ARGON2I);

    if ($nome == 'lazaro' and $hash == '1234'){
        if (password_verify($senha, $hash)) {
            header('location: paginicio.php');
        }
    } else {
        echo "Senha não confere.";
    }
    } 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h1> Cadastre-se <h2>
    <form action="" method="post">
    <label for="nome"> Nome: <input type="text" name="nome"> <br><br>
        <label for="senha"> Senha: <input type="password" name="senha"> <br><br>
            <input type="submit" value="Enviar">
</form>
</body>
</html>