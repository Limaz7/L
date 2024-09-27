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
  include_once "header.php";
  require_once "conect.php";
  ?>
  <main class="container">
    <h1> Clientes </h1>
    <a href="forminsere.php" class="black waves-effect waves-light btn"><i class="material-icons right">add</i>Inserir</a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>CPF</th>
          <th>Nome</th>
          <th>Data nascimento</th>
          <th>Operação </th>
        </tr>
      </thead>

      <tbody>
        <?php
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
          <tr>
            <td><?php echo $linha['id']; ?></td>
            <td><?php echo $linha['cpf']; ?></td>
            <td><?php echo $linha['nome_cliente']; ?></td>
            <td><?php $dataNasc = date('d/m/Y', strtotime($linha['data_nasc']));
                echo $dataNasc; ?></td>
            <td> <a href="#modal<?php echo $linha['id']; ?>" class="btn-floating btn-small waves-effect waves-light red modal-trigger"><i class="material-icons">delete</i></a></td>

            <!-- Modal Structure -->
            <div id="modal<?php echo $linha['id']; ?>" class="modal">
              <div class="modal-content">
                <h4>Atenção!</h4>
                <p>Você confirma a exclusão do cliente <?php echo $linha['nome_cliente']; ?>?</p>
              </div>
              <div class="modal-footer">
                <form action="excluir.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">

                  <button type="button" name="btn-cancelar" class="modal-action modal-close  btn waves-light green">
                    Cancelar </button>
                  <button type="submit" name="btn-deletar" class="modal-action modal-close waves-red btn red darken-1">
                    Excluir </button>
                </form>
              </div>
            </div>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </main>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    // M.AutoInit();
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, {
        ocapacity: 0.7,
        inDuration: 300,
        outDuration: 200,
        dismissible: false,
        startingTop: '10%',
        endingTop: '15%'
      });
    });
  </script>

</body>

</html>