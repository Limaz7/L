<?php

$id = $_GET['id_lista'];

include "conexao.php";

$sql = "SELECT * FROM lista WHERE id_lista = '$id'";

$result = mysqli_query($conecta, $sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php

    echo "<a href=\"cadastrarprod.php\">Cadastar Produtos</a><br><br>";

    echo '<table border=1>
    <tr>
      <th>ID</th>
      <th>Descrição</th>
      <th>Categoria</th>
      <th>Quantidade</th>
      <th colspan=2>Opção</th>
    </tr>';
    
    while ($dados = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$dados['id_lista'].'</td>';
        echo '<td>'.$dados["descricao"].'</td>';
        echo '<td>'.$dados["categoria"].'</td>';
        echo '<td>'.$dados["quantidade"].'</td>';

        echo '<td><a href="formedit?id_lista='.$dados['id_lista'].'">Editar</a></td>';
        echo '<td><a href="deleteprod?id_lista='.$dados['id_lista'].'">Excluir</a></td>';
        echo '</tr>';
    }
    
    echo '</table>'
    ?>
</body>
</html>
