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
    <form action="" method="get">
        
        Seu saldo é: <?php echo $dados["valor"]; ?> <br><br>

        Informe um valor:<input type="number" name="num">

        <p><input type="radio" name="a" value="1">Sacar</a></p>
        <p><input type="radio" name="a" value="2">Depositar</a></p>

        <p><input type="submit" value="Enviar">
    </form>

    <?php

if($_GET){

include "conexao.php";

$saldo = $_GET["num"];
$a = $_GET["a"];

if($a == 2){

$depositar = $saldo + $dados["valor"];
$sql = "UPDATE `saldo` SET `valor`='$depositar' WHERE 1";

} else if ($a == 1){
    $sacar = $dados["valor"] - $saldo;
    $sql = "UPDATE saldo SET valor = '$sacar' WHERE id_saldo = 1";
}
}
?>
</body>
</html>