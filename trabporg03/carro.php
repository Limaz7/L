<?php

session_start();

print_r($_SESSION["carrinho"]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Compra colocada com sucesso! </h1>

    <?php echo $_SESSION["carrinho"] [0]; ?>

    <a href="exccarro">Excluir do carrinho</a>


    <h3><a href="index.php">Continuar comprando</a></h3>
</body>
</html>