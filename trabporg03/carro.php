<?php
session_start();

// Verifica se o carrinho existe na sessão
if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = array();
}

// Lida com a exclusão de itens
if (isset($_GET['excluir'])) {
    $indice = $_GET['excluir'];
    if (isset($_SESSION["carrinho"][$indice])) {
        unset($_SESSION["carrinho"][$indice]);
        // Reorganiza os índices do array
        $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    }
}

print_r($_SESSION["carrinho"])

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Compra colocada com sucesso!</h1>

    <?php 
    if ($_SESSION["carrinho"]) {
        foreach ($_SESSION["carrinho"] as $indice => $item) {
            if (isset($item["batata"])) {
                echo "Batata <br><br>";
                echo "<a href='carro?excluir=$indice'>Excluir do carrinho</a><br><br>";
            } elseif(isset($item["Toni"])){

            }
        }
        
    } else {
        echo "O carrinho está vazio.";
    }
    ?>

    <h3><a href="index.php">Continuar comprando</a></h3>
</body>
</html>
