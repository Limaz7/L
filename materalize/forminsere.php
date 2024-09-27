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

        <h1 class="center-align"> Cadastrar </h1>
        <form action="insere.php" method="get">
            <div class="card-panel">
                <div class="row">

                    <div class="input-field col s10 offset-s1">
                        <input placeholder="Digite no formato XXX.XXX.XXX-XX" id="CPF" type="text" class="validate"
                            pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" required>
                        <label for="CPF">CPF</label>
                        <span class="helper-text" data-error="Campo deve ser preenchido no formato
                            999.999.999-99"></span>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <input id="nome_cliente" type="text" class="validate"
                            pattern="[A-Za-z\s]+" required>
                        <label for="nome_cliente">Nome cliente</label>
                        <span class="helper-text" data-error="Campo com preenchimento obrigatório"></span>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <input id="data_nasc" type="text" class="datepicker" name="data_nasc">
                        <label for="data_nasc">Data nascimento</label>
                    </div>
                </div>

    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        // Inicializa o date picker
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elems, {
                autoClose: true, // Fecha o date picker automaticamente após a seleção
                format: 'dd/mm/yyyy', // Define o formato da data
                yearRange: [1900, 2100], // Define o intervalo de anos
                onSelect: function(date) {
                    console.log('Data selecionada: ', date);
                }
            });
        });
    </script>
    </div>
    </div>
</body>

</html>