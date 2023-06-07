fetch("../../admin/controllers/listreservas.php")
.then(res => res.json())
.then(json => {
    let linha = `
                <thead>
                    <th>Usuário</th>
                    <th>Hotel</th>
                    <th>Status</th>
                    <th>Data Reserva</th>
                </thead>`;
    json.forEach((data) => {
        linha += `
                <tr class="lista">
                    <td>${data.nomeuser}</td>
                    <td>${data.nomehotel}</td>
                    <td>${data.status}</td>
                    <td>${data.data_reserva}</td>
                </tr>`;
    });

    document.querySelector("#table-reservas").innerHTML = linha;
})
.catch(err => console.log(err))