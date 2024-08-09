<?php

$pagina_corrente = basename($_SERVER['SCRIPT_NAME']);

?>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right"><img src="jogador.jfif" height="55" width="60"></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li <?php if ($pagina_corrente == 'index.php') {
                        echo 'class="active"';
                    } ?>> <a class="black-text" href="index.php">Casa</a></li>
                <li <?php if ($pagina_corrente == 'destino.php') {
                        echo 'class="active"';
                    } ?>> <a class="black-text" href="destino.php">Destino</a></li>
                <li <?php if ($pagina_corrente == 'quem.php') {
                        echo 'class="active"';
                    } ?>> <a class="black-text" href="quem.php">Quem somos</a></li>
                <li <?php if ($pagina_corrente == 'login.php') {
                        echo 'class="active"';
                    } ?>> <a class="black-text" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
</div>