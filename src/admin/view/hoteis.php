<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $nome = "Login";
    if(isset($_SESSION["Logado"])) {
        $nome = $_SESSION["Logado"];
    } else {
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../icon_admin.ico" type="image/x-icon">
    
    <title>Painel Admin | PAX Hotels</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../components/css/painel/hoteis_painel.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="top-s">
                <div>
                    <img src="../../components/imgs/user.png" alt="Usuário">
                </div>
                <div class="info">
                    <span>Carlos Fabian Jr</span>
                    <span>Admin</span>
                </div>
            </div>
            <div class="opcoes">
                <ul>
                    <li>
                        <a href="./main.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="./usuarios.php">Usuários</a>
                    </li>
                    <li>
                        <a href="./reservas.php">Reservas</a>
                    </li>
                    <li class="selected">
                        <a href="./hoteis.php">Hotéis</a>
                    </li>
                    <li class="suporte">
                        <a href="./suporte.php">Suporte</a>
                    </li>
                </ul>
            </div>
        </aside>
        <aside class="main">
            <header>
                <div div class="logo" id="logo">
                    <h2>PAINEL ADMIN | PAX Hotels</h2>
                </div>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="./suporte.php">Configurações</a>
                        </li>
                        <li>
                            <a href="./suporte.php">Configurações</a>
                        </li>
                        <li>
                            <a href="../controllers/logout.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </header>

            <main class="dashboard">
                <div class="container-dash">
                    <div class="hotel-paises">
                        <div class="hotel-famosos">
                            <div>
                                <h2>Hotéis</h2>
                            </div>
                            <div>
                                <table id="table-hotel"></table>
                            </div>
                        </div>
                    </div>
                    <aside class="form">
                        <form id="form_cadastro_hotel" name="form_cadastro_hotel" class="form_cadastro_hotel" enctype="multipart/form-data" method="post" action="../../backend/hotel/controllers/adicionar.php">
                            <div class="agrupamento_cadastro">
                                <div class="campos">
                                    <div>
                                        <fieldset>
                                            <legend>Dados Gerais</legend>
                                            <div>
                                                <input type="hidden" id="id" name="id">
                                            </div>
                                            <div>
                                                <input type="text" id="nome" name="nome" placeholder="Nome" required>
                                            </div>
                                            <div>
                                                <input type="text" name="cnpj" id="cnpj" oninput="formataCNPJ(this.value)" maxlength="18" placeholder="CNPJ" required>
                                            </div>
                                            <div>
                                                <input type="text" name="celular" id="celular" maxlength="15" oninput="formataCELULAR(this.value)" placeholder="Celular" required>
                                            </div>
                                            <div>
                                                <input type="email" name="email" oninput="formataEMAIL(this.value)" id="email" placeholder="E-mail" required>
                                            </div>
                                            <div>
                                                <textarea name="descricao" id="descricao" placeholder="Descrição" required></textarea>
                                            </div>
                                            <div>
                                                <textarea name="comodidades" id="comodidades" placeholder="Comodidades" required></textarea>
                                            </div>
                                            <div>
                                                <input type="number" name="quantidade_quarto" id="quantidade_quarto" placeholder="Quartos" required>
                                            </div>
                                            <div>
                                                <input type="number" name="classificacao" id="classificacao" placeholder="Classificação" required>
                                            </div>
                                            <div>
                                                <input type="number" name="avaliacao" id="avaliacao" placeholder="Avaliação" required>
                                            </div>
                                            <div>
                                                <input type="file" name="foto_hotel" id="foto_hotel" required>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <legend>Endereço</legend>
                                            <div>
                                                <input type="text" name="endereco_cep" oninput="formataCEP(this.value)" id="endereco_cep" placeholder="CEP" maxlength="9" required>
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
                                        <div class="div-cadastrar">
                                            <input type="submit" value="CADASTRAR" id="btnAction" name="entrar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>
            </main>

            <div class="modal-excluir" id="modal-excluir">
                <form action="../../backend/hotel/controllers/deletar.php" method="post">
                    <div>
                        <input type="hidden" name="id" id="idExcluir">
                    </div>
                    <p>Deseja remover este hotel?</p>
                    <div class="div-remover">
                        <button type="submit" value="Remover" id="remover" name="remover">Remover</button>
                        <button type="button" value="Cancelar" id="cancelar" onclick="notRemove()" name="cancelar">Cancelar</button>
                    </div>
                </form>
            </div>
        </aside>
    </div>

    <script src="../../components/js/admin/hotel.js"></script>
</body>
</html>