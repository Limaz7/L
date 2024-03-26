<?php

include "conexao.php";

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM saldo";

//Executa o select
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_assoc($resultado)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <form action="" method="post">
        
        Seu saldo é: <?php echo $dados["valor"]; ?> <br><br>

        Informe um valor:<input type="number" name="num">

        <p><input type="radio" name="a" value="1">Sacar</a></p>
        <p><input type="radio" name="a" value="2">Depositar</a></p>

        <p><input type="submit" value="Enviar">
    </form>

    <?php

if($_POST){

include "conexao.php";

$saldo = $_POST["num"];
$a = $_POST["a"];

if($a == 2){

$soma = $saldo + $dados["valor"];
$sql = "UPDATE saldo SET valor = '$soma' WHERE id_saldo = 1";


}
}
?>
</body>
</html>