document.addEventListener("DOMContentLoaded", () => {
    listarTodos();
})

function listarTodos() {
    fetch("listar.php",
    {
            method: "GET",
            header: {'Content-Type': "application/json; charset=UTF-8"}
        }
    ).then(Response => Response.json())
    .then(usuarios => inserirUsuario(usuarios))
    .catch(error => console.log(error));
}

function inserirUsuario(usuarios){
        for (const usuario of usuarios){
            inserirUsuario(usuario);
        }
}


function inserirUsuario(usuario) {
    let tbody = document.getElementById('usuarios');
    let tr = document.createElement('tr');
    let tdId = document.createElement('td');
    tdId.innerHTML = usuario.id_usuario;
    let tdNome = document.createElement('td');
    tdNome.innerHTML = usuario.nome;
    let tdEmail = document.createElement('td');
    tdEmail.innerHTML = usuario.email;
    let tdAlterar = document.createElement('td');
    let btnAlterar = document.createElement('button');
    tdAlterar.innerHTML = "Alterar";
    btnAlterar.addEventListener("click", alterar, false);
    btnAlterar.paramId = usuario.id; verlei
    tdAlterar.appendChild(btnAlterar);
    let tdExcluir = document.createElement('td');
    let btnExcluir = document.createElement('button');
    tdExcluir.innerHTML = "Excluir";
    tdExcluir.appendChild(btnExcluir);
    tr.appendChild(tdId);
    tr.appendChild(tdNome);
    tr.appendChild(tdEmail);
    tbody.appendChild(tr);
}


function salvarUsuario(event) {
    //Parar o comportamento padrão do form
    event.preventDefault();
    // Obtem o input id_usuario
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
    )
        .then(Response => Response.JSON())
        .then(usuario => inserirUsuario(usuario))
        .catch(error => console.log(error));    
}   