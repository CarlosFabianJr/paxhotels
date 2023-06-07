fetch("../../admin/controllers/listusers.php")
.then(res => res.json())
.then(json => {
    let linha = `
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Perfil</th>
                    <th>Data Cadastro</th>
                    <th style="text-align: center">Ações</th>
                </thead>`;
    json.forEach((data) => {
        linha += `
                <tr class="lista">
                    <td>${data.nome}</td>
                    <td>${data.cpf}</td>
                    <td>${data.perfil}</td>
                    <td>${data.data_cadastro}</td>
                    <td  style="text-align: center">
                        <i class="bi bi-pencil-fill" id="editar" onclick="action(event, ${data.id})" style="cursor: pointer;"></i>
                        <i class="bi bi-trash3-fill" id="excluir" onclick="action(event, ${data.id})" style="cursor: pointer;"></i>
                    </td>
                </tr>`;
    });

    document.querySelector("#table-users").innerHTML = linha;
})
.catch(err => console.log(err))

function formataCEP(cep) {
    if(!cep) return '';
    cep = cep.replace(/\D/g,'');
    cep = cep.replace(/^(\d{5})(\d)/, '$1-$2');
    if(cep.length == 9) {
        buscaCEP(cep);
    }
    return document.getElementById('endereco_cep').value = cep;
}

function buscaCEP(cep) {
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(res => res.json())
    .then(data => {
        document.getElementById("endereco_logradouro").value = data.logradouro;
        document.getElementById("endereco_bairro").value = data.bairro;
        document.getElementById("endereco_cidade").value = data.localidade;
        document.getElementById("endereco_estado").value = data.uf;
        document.getElementById("endereco_pais").value = "Brasil";
    })
    .catch(err => console.log(err))
}

function formataCELULAR(celular) {
    if (!celular) return ''
    res = celular.replace(/\D/g,'')
    res = res.replace(/(\d{2})(\d)/,'($1) $2')
    res = res.replace(/(\d)(\d{4})$/,'$1-$2')
    return document.getElementById('celular').value = res
}

function formataEMAIL(email) {
    let usuario = email.substring(0, email.indexOf('@'));
    let dominio = email.substring(email.indexOf('@')+ 1, email.length);

    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search('@')==-1) &&
        (dominio.search('@')==-1) &&
        (usuario.search(' ')==-1) &&
        (dominio.search(' ')==-1) &&
        (dominio.search('.')!=-1) &&
        (dominio.indexOf('.') >=1)&&
        (dominio.lastIndexOf('.') < dominio.length - 3) ||
        (dominio.indexOf('.') >=1) && 
        (dominio.lastIndexOf('.') < dominio.length - 2)) {
            document.getElementById("email").style = "color: #008000";
        } else {
            document.getElementById("email").style = "color: #f00";
        }
}

function formataCNPJ(cpf) {
    if(!cpf) return ''
    let cpf_ = cpf.replace(/\D/g,'')
    cpf_ = cpf_.replace(/(\d{3})(\d)/, '$1.$2')
    cpf_ = cpf_.replace(/(\d{3})(\d)/, '$1.$2')
    cpf_ = cpf_.replace(/(\d{3})(\d{1,2})$/, '$1-$2')
    return document.getElementById('cpf').value = cpf_
}

function action(event, id) {
    let data = {
        "id": id
    };
    if(event.target.id == "excluir") {
        document.getElementById("modal-excluir").style.display = "block";
        document.getElementById("idExcluir").value = id;
    } else if(event.target.id == "editar") {
        fetch("../../backend/usuario/controllers/getuserbyid.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(json => {
            document.getElementById("id").value = Number(json.id);
            document.getElementById("nome").value = json.nome;
            document.getElementById("cpf").value = json.cpf;
            document.getElementById("celular").value = json.celular;
            document.getElementById("email").value = json.email;
            document.getElementById("endereco_cep").value = json.cep;
            document.getElementById("endereco_numero").value = json.numero;
            document.getElementById("endereco_logradouro").value = json.logradouro;
            document.getElementById("endereco_bairro").value = json.bairro;
            document.getElementById("endereco_cidade").value = json.cidade;
            document.getElementById("endereco_estado").value = json.estado;
            document.getElementById("endereco_pais").value = json.pais;

            document.getElementById("btnAction").value = "EDITAR";
            document.getElementById("form_cadastro_usuario").action = "../../backend/usuario/controllers/editar.php";
        })
    }
}

function notRemove() {
    document.getElementById("modal-excluir").style.display = "none";
}