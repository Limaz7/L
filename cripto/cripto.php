<?php

$senha = 'minhasenha';

// Gerar a hash da senha
$hash = password_hash($senha, PASSWORD_ARGON2I);

// Verificar se a senha cinfere
if(password_verify($senha, $hash)){
    echo 'Senha confere.';
}else {
    echo "Senha não confere";
}
?>