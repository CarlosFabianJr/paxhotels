<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./src/favicon.ico" type="image/x-icon">
    
    <title>PAX hotels</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./src/components/css/style.css">
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
                    <a href="./index.php">
                        <img src="./src/components/imgs/PAXhotels.svg" alt="Hotel Manaus" class="logo-hotel-manaus">
                    </a>
                </div>
                <nav class="nav">
                    <ul>
                        <li id="Favoritos" onclick="Desenvolvimento()">
                            <a href="#">
                                <i class="bi bi-heart-fill"></i>
                                Favoritos
                            </a>
                        </li>
                        <li id="Suporte" onclick="Desenvolvimento()">
                            <a href="#">
                                <i class="bi bi-chat-dots-fill"></i>
                                Suporte
                            </a>
                        </li>
                        <li id="Login" onclick="Login()">
                            <a href="#">
                                <i class="bi bi-person-fill"></i>
                                Login
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
            <form action="#" method="post" class="container-hs">
                <div class="titulo-form">
                    <h2>Vai para onde?</h2>
                </div>
                <div class="campos">
                    <div>
                        <input type="text" class="destino" placeholder="Busque cidade">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <span class="periodo">
                        <div>
                            <input type="text" name="check-in" id="check-in" placeholder="Check-in" onfocus="(this.type='date')" onblur="(this.type='text')">
                        </div>
                        <div>
                            <input type="text" name="check-out" id="check-out" placeholder="Check-out" onfocus="(this.type='date')" onblur="(this.type='text')">
                        </div>
                    </span>
                    <div>
                        <input type="text" class="room-pax" placeholder="1 quarto, 3 hóspedes" onclick="roomHos()" readonly>
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
                        <input type="submit" value="Pesquisar" class="pesquisar">
                    </div>
                </div>
            </form>
        </section>

        <section class="promocoes">
            <div class="container-p">
                <a href="./src/views/hoteis.php">
                    <div class="promo-1">
                        <div class="img"></div>
                        <div class="info">
                            <h6>QUARTO</h6>
                            <h2>CASAL</h2>
                            <span>Rio de Janeiro - RJ</span>
                        </div>
                    </div>
                </a>
                <a href="./src/views/hoteis.php">
                    <div class="promo-2">
                        <div class="img"></div>
                        <div class="info">
                            <h6>QUARTO</h6>
                            <h2>EXECUTIVO</h2>
                            <span>Vitória - ES</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="ads">
            <div class="container-ads">
                <div class="info-ads">
                    <h2>HOTÉIS COM ATÉ 5O% DE DESCONTO</h2>
                </div>
                <div class="action-ads">
                    <a href="#">APROVEITE</a>
                </div>
            </div>
        </section>

        <section class="populares">
            <div class="title-pop">
                <h2>Destinos Populares</h2>
            </div>
            <div class="container-pop">
                <div class="line-1">
                    <div class="pop-1 box-pop">
                        <span>Rio de Janeiro - RJ</span>
                    </div>
                    <div class="pop-2 box-pop">
                        <span>São Paulo - SP</span>
                    </div>
                    <div class="pop-3 box-pop">
                        <span>Natal - RN</span>
                    </div>
                    <div class="pop-4 box-pop">
                        <span>Fortaleza - CE</span>
                    </div>
                </div>
                <div class="line-2">
                    <div class="pop-5 box-pop">
                        <span>São Francisco</span>
                    </div>
                    <div class="pop-6 box-pop">
                        <span>Hong Kong</span>
                    </div>
                    <div class="pop-7 box-pop">
                        <span>Paris</span>
                    </div>
                    <div class="pop-8 box-pop">
                        <span>Madrid</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="ads">
            <div class="container-ads">
                <div class="info-ads">
                    <h2>HOTÉIS COM ATÉ 5O% DE DESCONTO</h2>
                </div>
                <div class="action-ads">
                    <a href="#">APROVEITE</a>
                </div>
            </div>
        </section>

        <section class="newsletter">
            <div class="container-n">
                <div class="title-n">
                    <h2>INSCREVA-SE PARA RECEBER OFERTAS EXCLUSIVAS!</h2>
                </div>
                <div class="campos-n">
                    <div>
                        <input type="text" class="nome" placeholder="Nome">
                    </div>
                    <div>
                        <input type="text" class="email" placeholder="E-mail">
                    </div>
                    <div>
                        <input type="submit" class="eu_quero" value="EU QUERO">
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container-f">
                <div class="top-f">
                    <div class="logo-f">
                        <img src="./src/components/imgs/PAXhotels.svg" alt="Logo">
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

    <div class="modal-login" id="modal-login" onclick="hideLogin(event)">
        <div class="container-ml">
            <div class="imagem-ml">
                <div>
                    <img src="./src/components/imgs/PAXhotels.svg" alt="PAX hotels">
                </div>
            </div>
            <div class="campos-ml">
                <div>
                    <h2>LOGIN</h2>
                </div>
                <div>
                    <input type="text" class="email" placeholder="E-mail" required>
                </div>
                <div>
                    <input type="password" class="senha" placeholder="Senha" required>
                </div>
                <div>
                    <input type="submit" value="Entrar" class="entrar">
                </div>
                <div class="novo">
                    <div>
                        <h3>Não tem login?</h3>
                    </div>
                    <div>
                        <a href="./src/views/cadastro.php">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-desenvolvimento" id="modal-desenvolvimento" onclick="hideDesenvolvimento(event)">
        <div class="container-md">
            <div class="imagem-md">
                <div>
                    <img src="./src/components/imgs/desenvolvimento.gif" alt="search hotels">
                </div>
            </div>
            <div class="md">
                <h2>Desculpe o trastorno... página sendo criada</h2>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="./src/components/js/script.js"></script>
</body>
</html>