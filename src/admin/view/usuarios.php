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
    <link rel="stylesheet" href="../../components/css/painel/usuario_painel.css">
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
                    <li class="selected">
                        <a href="./usuarios.php">Usuários</a>
                    </li>
                    <li>
                        <a href="./reservas.php">Reservas</a>
                    </li>
                    <li>
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
                    <div class="novos-usuarios">
                        <div class="title-user">
                            <h2>Usuários cadastrados</h2>
                        </div>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Data de Cadastro</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Rosemary Bentes</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Rosaimeé Bentes</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Teófilo Bentes</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Júnior Bentes</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Aruna Bentes</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Fabian Jr</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>João Carlos</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Marta Silva</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Maria Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Carlos Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Rafael Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Filipe Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Marcos Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td>Mario Souza</td>
                                        <td>123.456.789-90</td>
                                        <td>01/05/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </aside>
    </div>

    <script src="../../components/js/admin_painel.js"></script>
</body>
</html>