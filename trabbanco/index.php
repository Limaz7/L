<?php

include "conexao.php";

//seleciona todos os dados da tabela lista
$sql = "SELECT * FROM saldo";

//Executa o select
$resultado = mysqli_query($conecta,$sql);
$dados = mysqli_fetch_assoc($resultado);

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

        Informe um valor:<input type="number" name="num"/> <br>

        <p><input type="radio" name="n1" value="1">Sacar</p>
        <p><input type="radio" name="n1" value="2">Depositar</p>

        <p><input type="submit" value="Enviar">
    </form>

    <?php

if($_POST){

include "conexao.php";

$num = $_POST["num"];
$depsac = $_POST["n1"];

if($depsac == 2){

    $dep = $num + $dados["valor"];
    $sql = "UPDATE `saldo` SET `valor`='$dep' WHERE id_saldo = 1";
    mysqli_query($conecta, $sql);
    header("location: index.php");

}

if ($depsac == 1) {
    if ($num > $dados["valor"]){
        echo "Você não tem dinheiro suficiente para sacar!";
    } else {
        $sacar = $dados["valor"] - $num;
        $sql = "UPDATE saldo SET valor='$sacar' WHERE id_saldo = 1";
        mysqli_query($conecta, $sql);
        header("location: index.php");
    }
}

}
?>
</body>
</html>