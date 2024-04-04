<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    
<h1> LISTA </h1>

<?php

echo "<p><a href=\"formcadlist.php\">Cadastre uma lista</a></p>";

include "conexao.php";

$sql = "SELECT * FROM lista ORDER BY ano DESC, mes DESC";

$resultado = mysqli_query($conecta, $sql);



while ($dados = mysqli_fetch_assoc($resultado)) {
    echo '<tr><br>';
    echo '<td>'.$dados['ano'].'</td><br>';
    echo '<td><a href="listarprod?id_lista='.$dados['id_lista'].'">'.$dados["mes"].'</a></td> | ';
    echo '<a href="deletelist?mes='.$dados['mes'].'&ano='.$dados['ano'].'">Excluir</a> | ';
    echo '<a href="editlist?mes='.$dados['mes'].'&ano='.$dados['ano'].'">Editar</a><br>';

    echo '</tr>';

echo '</table>';
}

?>
  
</body>
</html>