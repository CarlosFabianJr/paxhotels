const body = document.body;
let back_1 = 'background-image: url("../components/imgs/quarto-cadastr2.png")';
let back_2 = 'background-image: url("../components/imgs/quarto-cadastro.png")';
let bool = true;

function changeBody() {
    setInterval(()=> {
        if(bool == true) {
            console.log('Back1')
            body.style = back_1;
            bool = false;
        } else {
            console.log('Back2')
            body.style = back_2;
            bool = true;
        }
    }, 5000);
}

changeBody();


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

function formataCPF(cpf) {
    if(!cpf) return ''
    cpf_ = cpf.replace(/\D/g,'')
    cpf_ = cpf_.replace(/(\d{3})(\d)/, '$1.$2')
    cpf_ = cpf_.replace(/(\d{3})(\d)/, '$1.$2')
    cpf_ = cpf_.replace(/(\d{3})(\d{1,2})$/, '$1-$2')
    return document.getElementById('cpf').value = cpf_
}