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
    <form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post" action="">
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
                    <label for="username">Nome</label>
                    <div>
                        <input type="text" id="username" name="username" required autofocus>
                    </div>
                    <div class="grupo-1">
                        <div>
                            <div>
                                <label for="nascimento">Nascimento</label>
                            </div>
                            <div>
                                <input type="date" name="nascimento" id="nascimento" required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="sexo">Sexo</label>
                            </div>
                            <div class="grupo-sexo">
                                <div>
                                    <input type="radio" value="Masculino" name="sexo" id="sexo" checked>
                                    <label for="sexo">Masculino</label>
                                </div>
                                <div>
                                    <input type="radio" value="Feminino" name="sexo" id="sexo">
                                    <label for="sexo">Feminino</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="cpf">CPF</label>
                    </div>
                    <div>
                        <input type="text" name="cpf" id="cpf" required>
                    </div>
                    <div>
                        <label for="cep">CEP</label>
                    </div>
                    <div>
                        <input type="text" name="cep" id="cep" required>
                    </div>
                    <div class="grupo-2">
                        <div>
                            <div>
                                <label for="telefone_fixo">Telefone Fixo</label>
                            </div>
                            <div>
                                <input type="text" name="telefone_fixo" id="telefone_fixo" maxlength="14" required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="celular">Celular</label>
                            </div>
                            <div>
                                <input type="text" name="celular" id="celular" required>
                            </div>
                        </div>
                    </div>
                    <div class="grupo-3">
                        <div>
                            <div>
                                <label for="email">E-mail</label>
                            </div>
                            <div>
                                <input type="email" name="email" id="email" required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="confirmar_email">Confirmar E-mail</label>
                            </div>
                            <div>
                                <input type="email" name="confirmar_email" id="confirmar_email" required>
                            </div>
                        </div>
                    </div>
                    <div class="grupo-4">
                        <div>
                            <div>
                                <label for="senha">Senha</label>
                            </div>
                            <div>
                                <input type="password" name="senha" id="senha" required>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="confirmar_senha">Confirmar Senha</label>
                            </div>
                            <div>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" required>
                            </div>
                        </div>
                    </div>
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