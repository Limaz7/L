<?php


if($_POST){

    $tema = $_POST['tema'];

    if($tema == 1){

        setcookie("tema", "Escuro", time()+604800);
        echo "O tema é: escuro";
        ?>

        <style>
            body{
                background: black;
                color: white;
            }
        </style>

    <?php
    } elseif ($tema == 2){
        setcookie("tema", "Claro", time()+604800);
        echo "O tema é: claro";
        ?>

        <style>
            body{
                background: white;
                color: black;
            }
        </style>

    <?php
    }
    
} else {
    
}



?>

<!DOCTYPE html>

<?php

if(isset($_COOKIE["tema"])){
    $valor = $_COOKIE["tema"];
    if($valor == 1){
        echo "<style> body {background: black; color: white;}</style>";
    } elseif ($valor == 2) {
        echo "<style> body {background: white; color: black;}</style>";
    }
} 

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>

</head>
<body>
    <form method="post" action="">
        <p> Escuro<input type="radio" name="tema" value="1"></p>
        <p> Claro<input type="radio" name="tema" value="2"></p>

        <input type="submit" value="Mudar">
    
</body>
</html>