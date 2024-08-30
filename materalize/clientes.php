<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  include_once "headers.php";
  require_once "conect.php";
  ?>
  <main class="container">
    <h1>Clientes</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>CPF</th>
          <th>Nome</th>
          <th>Data de nascimento</th>
          <th colspan="2">Opções</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $sql = "SELECT * FROM clientes";
        $result = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?= $dados['id']; ?></td>
            <td><?= $dados['cpf']; ?></td>
            <td><?= $dados['nome_cliente']; ?></td>
            <td><?= $dados['data_nasc']; ?></td>
            <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
          </tr>
        <?php
       }
        ?>
      </tbody>
    </table>
  </main>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>