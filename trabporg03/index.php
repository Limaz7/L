<?php

session_start();

if($_POST){
    if(isset($_SESSIO["carrinho"][] = ))
    $_SESSION["carrinho"] [] = $_POST['prod1'];
    $_SESSION["carrinho"] [] = $_POST['prod2'];
    header('location: carro.php');
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE</title>
</head>
<body>
<form method="post" action="">

    <h1> Coloca o bgl no carro </h1>

        Thiago Krug <br><input type="submit" name="prod1" value="Enviar"> <br><br>

        Toni montenegro <br><input type="submit" name="prod2" value="Enviar"> <br><br>

        <a href="vercarro.php"> Vizualizar o carrinho </a>

</form>
</body>
</html>