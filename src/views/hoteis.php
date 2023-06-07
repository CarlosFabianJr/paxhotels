<?php

    if(!isset($_SESSION)){
        session_start();
    }

    $nome = "Login";
    $userId = 0;
    $nomeValue = 0;
    $destino = "Destino";
    $checkIn = "26/08/2023";
    $checkOut = "26/08/2023";
    $hospedes = 1;
    $quartosPes = 1;
    $reserva = true;
    if(isset($_SESSION["Cadastrado"])) {
        $nome = $_SESSION["Cadastrado"];
        $nomeValue = 1;
    } elseif(isset($_SESSION["Logado"])) {
        $nome = $_SESSION["Logado"]["nome"];
        $userId = $_SESSION["Logado"]["iduser"];
        $nomeValue = 1;
        $reserva = false;
    }
    if(isset($_SESSION["quartos"])) {
        $destino = $_SESSION["pesquisa"]["destino"];
        $checkIn = $_SESSION["pesquisa"]["checkIn"];
        $checkIn = str_replace("0", "O", $checkIn);
        $checkOut = $_SESSION["pesquisa"]["checkOut"];
        $checkOut = str_replace("0", "O", $checkOut);
        $hospedes = $_SESSION["pesquisa"]["hospedes"];
        $quartosPes = $_SESSION["pesquisa"]["quartos"];
        $quartos = $_SESSION["quartos"];
    }
    
    $_SESSION["hotel"] = null;
    $_SESSION["preco"] = null;
    $_SESSION["comodidades"] = null;
    $_SESSION["classificacao"] = null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../src/favicon.ico" type="image/x-icon">
    
    <title>PAX hotels - Hotéis</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../src/components/css/hoteis.css">
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/fidena" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="container-h">
                <div class="logo" id="logo">
                    <a href="../../index.php">
                        <img src="../../src/components/imgs/PAXhotels.svg" alt="Hotel Manaus" class="logo-hotel-manaus">
                    </a>
                </div>
                <nav class="nav">
                    <ul>
                        <li id="Favoritos">
                            <a href="#">
                                <i class="bi bi-heart-fill"></i>
                                Favoritos
                            </a>
                        </li>
                        <li id="Suporte">
                            <a href="#">
                                <i class="bi bi-chat-dots-fill"></i>
                                Suporte
                            </a>
                        </li>
                        <li id="Login" value="<?php echo $nomeValue; ?>" onclick="openLogin(this)">
                            <a href="#">
                                <i class="bi bi-person-fill"></i>
                                <?php echo $nome; ?>
                                <div id="modal-user" class="modal-user">
                                    <div class="container-user">
                                        <div onclick="openConstrucao()">
                                            <a href="#">Perfil</a>
                                        </div>
                                        <div>
                                            <a href="../auth/sair/logout.php" class="sair">Sair</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li id="Idioma">
                            <select name="idioma" id="idioma">
                                <option value="pt-br">Português</option>
                                <option value="en-us">English</option>
                                <option value="es-es">Espanha</option>
                            </select>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hotels-search">
            <form action="../backend/quarto/controllers/pesquisadestino.php" method="post" class="container-hs">
                <div class="campos">
                    <div>
                        <input type="text" class="destino" name="destino" value="<?php echo $destino; ?>">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <span class="periodo">
                        <div>
                            <input type="text" name="check-in" id="check-in" value="<?php echo $checkIn; ?>" onfocus="(this.type='date')" onblur="dateCheck(this)">
                        </div>
                        <div>
                            <input type="text" name="check-out" id="check-out" value="<?php echo $checkOut; ?>" onfocus="(this.type='date')" onblur="dateCheck(this)">
                        </div>
                    </span>
                    <div>
                        <input type="text" class="room-hos" value="<?php echo $quartosPes; ?> quarto, <?php echo $hospedes; ?> hópedes" onclick="roomHos()" readonly>
                        <i class="bi bi-people"></i>
                        <div id="modal-rp" class="modal-rp">
                            <div>
                                <input type="number" name="quartos" id="quartos" value="1" oninput="setQuarto(this.value)">
                                <label for="quartos">Quarto(s)</label>
                            </div>
                            <div>
                                <input type="number" name="hospedes" id="hospedes" value="3" oninput="setHospede(this.value)">
                                <label for="hospedes">Hóspede(s)</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="NOVA BUSCA" class="pesquisar">
                    </div>
                </div>
            </form>
        </section>

        <section class="list-hoteis">
            <aside class="hoteis">
                <div class="container-hoteis">
                    <div class="top">
                        <div class="recomendacao">
                            <div>
                                <h3>RECOMENDADO</h3>
                            </div>
                            <div>
                                <div>A partir de</div>
                                <span>RS 8.464</span>
                            </div>
                        </div>
                        <div class="menor-preco">
                            <div>
                                <h3>MENOR PREÇO</h3>
                            </div>
                            <div>
                                <div>A partir de</div>
                                <span>RS 459</span>
                            </div>
                        </div>
                    </div>
                    <div class="lista">
                        <?php for($i = 0; $i < count($quartos); ++$i) { ?>
                            <div class="hotel-1">
                                <a onclick="teste(`<?php echo $quartos[$i]['idhotel']; ?>`, `<?php echo $userId; ?>`)">
                                    <script>
                                        function teste(idhotel, iduser) {
                                            console.log(idhotel, iduser)
                                        }
                                    </script>
                                    <div class="foto" style="background-image: url(<?php echo $quartos[$i]['url']; ?>"></div>
                                    <div class="informacoes">
                                        <div class="info-top">
                                            <div class="info-detalhes">
                                                <div>
                                                    <h3><?php echo $quartos[$i]["nome"]; ?></h3>
                                                </div>
                                                <div>
                                                    <h5><?php echo $quartos[$i]["cidade"]; ?> - <?php echo $quartos[$i]["estado"]; ?> - <?php echo $quartos[$i]["pais"]; ?></h5>
                                                </div>
                                                <div class="avaliacao">
                                                    <?php if($quartos[$i]["classificacao"] == 5) { ?>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                    <?php } elseif($quartos[$i]["classificacao"] == 4) { ?>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                    <?php } elseif($quartos[$i]["classificacao"] == 3) { ?>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                    <?php } elseif($quartos[$i]["classificacao"] == 2) { ?>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                    <?php } elseif($quartos[$i]["classificacao"] == 1) { ?>
                                                        <div class="stars">
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                    <?php } ?>
                                                    <h6><?php echo $quartos[$i]["avaliacao"]; ?> avaliações</span>
                                                </div>
                                                <div class="comodidades">
                                                    <span><small>Incluso:</small></span>
                                                    <p><?php echo $quartos[$i]["comodidades"]; ?></p>
                                                </div>
                                            </div>
                                            <div class="precos">
                                                <div>
                                                    <span>RESERVAR</span>
                                                </div>
                                                <div>
                                                    <h2>Diária</h2>
                                                </div>
                                                <div>
                                                    <h2><span>R$</span> <?php echo $quartos[$i]["valor_diaria"]; ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </aside>
        </section>

        <section class="newsletter">
            <div class="container-n">
                <div class="title-n">
                    <h2>INSCREVA-SE PARA RECEBER OFERTAS EXCLUSIVAS!</h2>
                </div>
                <form action="../backend/newsletter/controllers/adicionar.php" method="post">
                    <div class="campos-n">
                        <div>
                            <input type="text" name="nome" class="nome" placeholder="Nome">
                        </div>
                        <div>
                            <input type="text" name="email" class="email" placeholder="E-mail">
                        </div>
                        <div>
                            <input type="submit" class="eu_quero" value="EU QUERO">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="container-f">
                <div class="top-f">
                    <div class="logo-f">
                        <img src="../../src/components/imgs/PAXhotels.svg" alt="Logo">
                    </div>
                    <div class="pax-info">
                        <div>
                            <h2>PAX HOTEL LTDA.</h2>
                        </div>
                        <div>
                            CNPJ 12.345.678/OOO1-9O <br>
                            Avenida Constantino Nery, 3693 - Chapada <br>
                            CEP 69O25-315, Manaus/AM
                        </div>
                    </div>
                </div>
                <div class="main-f">
                    <div>
                        <span>&copy;2O23 Carlos Fabian Jr | Todos os Direitos Reservados</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal-login" id="modal-login">
        <div class="container-ml">
            <div class="imagem-ml">
                <div>
                    <img src="../../src/components/imgs/PAXhotels.svg" alt="PAX hotels">
                </div>
            </div>
            <div class="campos-ml">
                <div>
                    <h2>LOGIN</h2>
                </div>
                <form action="../auth/login/valida_login.php" method="post">
                    <div>
                        <input type="text" class="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div>
                        <input type="password" class="senha" name="senha" placeholder="Senha" required>
                    </div>
                    <div>
                        <input type="submit" value="Entrar" class="entrar">
                    </div>
                </form>
                <div class="novo">
                    <div>
                        <h3>Não tem conta?</h3>
                    </div>
                    <div>
                        <a href="../../src/views/cadastro.php">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../components/js/hoteis.js"></script>
</body>
</html>