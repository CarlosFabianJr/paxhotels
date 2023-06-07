fetch("../../admin/controllers/listlastusers.php")
.then(res => res.json())
.then(json => {
    let linha = `
                <thead>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Cadastro</th>
                </thead>`;
    json.forEach((data) => {
        linha += `
                <tr class="lista">
                    <td>${data.nome}</td>
                    <td>${data.cpf}</td>
                    <td>${data.data_cadastro}</td>
                </tr>`;
    });

    document.querySelector("#table-usuarios").innerHTML = linha;
})
.catch(err => console.log(err))

fetch("../../admin/controllers/listhotelsstar.php")
.then(res => res.json())
.then(json => {
    let linha = `
                <thead>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Data de Cadastro</th>
                </thead>`;
    json.forEach((data) => {
        linha += `
                <tr class="lista">
                    <td>${data.nome}</td>
                    <td>${data.cnpj}</td>
                    <td>${data.data_cadastro}</td>
                </tr>`;
    });

    document.querySelector("#table-hotel").innerHTML = linha;
})
.catch(err => console.log(err))