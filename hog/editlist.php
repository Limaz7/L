<?php

$mes = $_GET['mes'];
$ano = $_GET['ano'];

include "conexao.php";

$sql = "SELECT * FROM lista WHERE mes = '$mes' and ano = '$ano'";

$result = mysqli_query($conecta, $sql);

$dados = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <form action="updatelist.php" method="post">

        <p>ID: <input type="number" value="<?php echo $dados["id_lista"]; ?>" name="id"></p>
        <p>Mês: <input type="text" value="<?php echo $dados["mes"];?>" name="mes"><p>
        <p>Ano: <input type="number" value="<?php echo $dados["ano"];?>" name="ano"><p>

        <input type="submit" value="Enviar">
</body>
</html>