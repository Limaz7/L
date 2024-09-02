function salvarUsuario(event) {
    //Parar o comportamento padrão do form
    event.preventDefault();
    // Obtem o input id_usuaro
    let inputIDUsuario = document.getElementsByName("id_usuario")[0];
    // Pega o valor do input id_usuario
    let id_usuario = inputIDUsuario.value;

    let inputnome = document.getElementsByName("nome")[0];
    let nome = inputnome.value;

    let inputemail = document.getElementsByName("email")[0];
    let email = inputemail.value;

    let inputsenha = document.getElementsByName("senha")[0];
    let senha = inputsenha.value;

    fetch('inserir.php',
        {
            method: 'POST',
            body: JSON.stringify({
                id_usuario: id_usuario,
                nome: nome,
                email: email,
                senha: senha
            }),
            headers: { 'Content-Type': "application/json; charset=UTF-8" }
        }
    );
}   