<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../src/favicon.ico" type="image/x-icon">
    
    <title>PAX hotels - Cadastro</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../src/components/css/cadastro.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post" action="../backend/usuario/controllers/adicionar.php">
        <div class="agrupamento_cadastro">
            <div class="voltar">
                <a href="../../index.php">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
            <div>
                <img class="logo-pax-hotel" src="../../src/components/imgs/PAXhotels.svg" alt="PAX hotels">
            </div>
            <div class="title">
                <h1>
                    Cadastre-se e aproveite as melhores ofertas de hospedagem
                </h1>
            </div>
            <div class="campos">
                <div>
                <fieldset>
                            <legend>Dados Pessoais</legend>
                            <div>
                                <input type="text" id="nome" name="nome" placeholder="Nome" required autofocus>
                            </div>  
                            <div>
                                <input type="text" name="cpf" id="cpf" oninput="formataCPF(this.value)" maxlength="14" placeholder="CPF" required>
                            </div>
                            <div>
                                <input type="text" name="celular" id="celular" maxlength="15" oninput="formataCELULAR(this.value)" placeholder="Celular" required>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>Acesso</legend>
                            <div>
                                <input type="email" name="email" oninput="formataEMAIL(this.value)" id="email" placeholder="E-mail" required>
                            </div>
                            <div>
                                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Endereço</legend>
                            <div>
                                <input type="text" name="endereco_cep" oninput="formataCEP(this.value)" id="endereco_cep" placeholder="CEP" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_numero" id="endereco_numero" placeholder="Número" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_logradouro" id="endereco_logradouro" placeholder="Logradouro" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_bairro" id="endereco_bairro" placeholder="Bairro" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_cidade" id="endereco_cidade" placeholder="Cidade" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_estado" id="endereco_estado" placeholder="Estado" required>
                            </div>
                            <div>
                                <input type="text" name="endereco_pais" id="endereco_pais" placeholder="País" required>
                            </div>
                        </fieldset>
                    <div>
                        <input type="submit" value="CADASTRAR" name="entrar">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="../components/js/cadastro.js"></script>
</body>
</html>