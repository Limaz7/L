<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    
<h1> CRUD PRODUTO</h1>

<?php

echo "<a href=\"cadastrarprod.php\">Cadastar Produtos</a><br><br>";

include "conexao.php";

$sql = "SELECT * FROM lista";

$resultado = mysqli_query($conecta, $sql);

echo '<table border=1>
<tr>
  <th>ID</th>
  <th>Descrição</th>
  <th>Categoria</th>
  <th>Quantidade</th>
  <th>Mês</th>
  <th>Ano</th>
  <th colspan=2>Opção</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>'.$dados['id_lista'].'</td>';
    echo '<td>'.$dados['descricao'].'</td>';
    echo '<td>'.$dados['categoria'].'</td>';
    echo '<td>'.$dados['quantidade'].'</td>';
    echo '<td>'.$dados['mes'].'</td>';
    echo '<td>'.$dados['ano'].'</td>';

    echo '<td><a href="formedit?id_lista='.$dados['id_lista'].'">Editar</a></td>';
    echo '<td><a href="?id_lista='.$dados['id_lista'].'">Excluir</a></td>';
    echo '</tr>';
}

echo '</table>';


?>
  
</body>
</html>