<?php

if($_POST){

    $tema = $_POST['tema'];

    if($tema == 1){

        setcookie("tema", "escuro", time()+604800);
        echo "O tema é: escuro";
        echo"<style> body{ background: black; color: white;} </style>";

    } elseif ($tema == 2){

        echo"<style> body{ background: white; color: black;} </style>";
        setcookie("tema", "claro", time()+604800);
        echo "O tema é: claro";

    }
    
} else {
    if(isset($_COOKIE["tema"])){
        $valor = $_COOKIE["tema"];
        if($valor == "escuro"){
            echo "<style> body {background: black; color: white;}</style> ";
            echo "O tema é: escuro";
        } elseif ($valor == "claro") {
            echo "<style> body {background: white; color: black;}</style>"; 
            echo "O tema é: claro";
        }
    }

}
?>

<!DOCTYPE html>  

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