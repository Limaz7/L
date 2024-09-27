<?php
 $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
 //echo $pagina_corrente;
 ?>



<div class="navbar-fixed">    
    <nav class="black  lighten-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="mala02.png" height="55" width="60"></a>
    
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li <?php if($paginaCorrente == 'index.php') {echo 'class="active"';}?>> <a class="white-text" href="index.php">Home</a></li>    
        <li <?php if($paginaCorrente == 'clientes.php') {echo 'class="active"'; } ?>> <a class="white-text" href="clientes.php">Clientes</a></li> 
        <li <?php if($paginaCorrente == 'quem.php') {echo 'class="active"'; } ?>><a class="white-text" href="quem.php">Nós!</a></li>
        <li <?php if($paginaCorrente == 'login.php') {echo 'class="active"'; } ?>><a class="white-text" href="login.php">Login</a></li>
        <li <?php if($paginaCorrente == 'destinos.php') {echo 'class="active"'; } ?>><a class="white-text" href="destinos.php">Destinos</a></li>
      </ul>
    </div>
  </nav>
</div> 



        