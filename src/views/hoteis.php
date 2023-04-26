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
                        <li id="Login">
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
                        <input type="text" class="room-pax" placeholder="1 quarto, 3 hóspedes" readonly>
                        <i class="bi bi-people"></i>
                    </div>
                    <div>
                        <input type="submit" value="NOVA BUSCA" class="pesquisar">
                    </div>
                </div>
            </form>
        </section>

        <section class="list-hoteis">
            <aside class="filtros">
                <div class="top-filtro">
                    <div>
                        <h2>Filtro</h2>
                    </div>
                    <div>
                        <a href="#">Limpar</a>
                    </div>
                </div>
                <div class="body-filtro">
                    <section class="servicos">
                        <div>
                            <h3>Serviços</h3>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <input type="checkbox" name="todas-opcoes" id="todas-opcoes">
                                    <label for="todas-opcoes">Todas as opções</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="internet" id="internet">
                                    <label for="internet">Internet</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="restaurante" id="restaurante">
                                    <label for="restaurante">Restaurante</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="lavanderia" id="lavanderia">
                                    <label for="lavanderia">Lavanderia</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="cafe" id="cafe">
                                    <label for="cafe">Café da Manhã</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="academia" id="academia">
                                    <label for="academia">Academia</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="piscina" id="piscina">
                                    <label for="piscina">Piscina</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="estacionamento" id="estacionamento">
                                    <label for="estacionamento">Estacionamento</label>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="preco">
                        <div>
                            <h3>Preço</h3>
                        </div>
                        <div>
                            <div>
                                <span>RS 5OO</span>
                                <span>RS 25OO</span>
                            </div>
                            <input type="range" min="0" max="11" value="7" step="1">
                        </div>
                    </section>
                </div>
            </aside>
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
                        <div class="hotel-1">
                            <div class="foto"></div>
                            <div class="informacoes">
                                <div class="info-top">
                                    <div class="info-detalhes">
                                        <div>
                                            <h3>Windsor Florida Hotel</h3>
                                        </div>
                                        <div>
                                            <h5>Rio de Janeiro - RJ - Brasil</h5>
                                        </div>
                                        <div class="avaliacao">
                                            <span>Muito Bom</span>
                                            <h6>13.775 avaliações</span>
                                        </div>
                                        <div>
                                            <span>Café da Manhã incluso</span>
                                        </div>
                                    </div>
                                    <div class="precos">
                                        <div>
                                            <h>5 diárias, 1 hóspede</h>
                                        </div>
                                        <div>
                                            <span>RS</span> <h3>8.464</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-bottom">
                                    <h3>Acumule 1.OOO pontos com PAXfidelidade</h3>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-1">
                            <div class="foto"></div>
                            <div class="informacoes">
                                <div class="info-top">
                                    <div class="info-detalhes">
                                        <div>
                                            <h3>Windsor Florida Hotel</h3>
                                        </div>
                                        <div>
                                            <h5>Rio de Janeiro - RJ - Brasil</h5>
                                        </div>
                                        <div class="avaliacao">
                                            <span>Muito Bom</span>
                                            <h6>13.775 avaliações</span>
                                        </div>
                                        <div>
                                            <span>Café da Manhã incluso</span>
                                        </div>
                                    </div>
                                    <div class="precos">
                                        <div>
                                            <h>5 diárias, 1 hóspede</h>
                                        </div>
                                        <div>
                                            <span>RS</span> <h3>8.464</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-bottom">
                                    <h3>Acumule 1.OOO pontos com PAXfidelidade</h3>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-1">
                            <div class="foto"></div>
                            <div class="informacoes">
                                <div class="info-top">
                                    <div class="info-detalhes">
                                        <div>
                                            <h3>Windsor Florida Hotel</h3>
                                        </div>
                                        <div>
                                            <h5>Rio de Janeiro - RJ - Brasil</h5>
                                        </div>
                                        <div class="avaliacao">
                                            <span>Muito Bom</span>
                                            <h6>13.775 avaliações</span>
                                        </div>
                                        <div>
                                            <span>Café da Manhã incluso</span>
                                        </div>
                                    </div>
                                    <div class="precos">
                                        <div>
                                            <h>5 diárias, 1 hóspede</h>
                                        </div>
                                        <div>
                                            <span>RS</span> <h3>8.464</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-bottom">
                                    <h3>Acumule 1.OOO pontos com PAXfidelidade</h3>
                                </div>
                            </div>
                        </div>
                        <div class="hotel-1">
                            <div class="foto"></div>
                            <div class="informacoes">
                                <div class="info-top">
                                    <div class="info-detalhes">
                                        <div>
                                            <h3>Windsor Florida Hotel</h3>
                                        </div>
                                        <div>
                                            <h5>Rio de Janeiro - RJ - Brasil</h5>
                                        </div>
                                        <div class="avaliacao">
                                            <span>Muito Bom</span>
                                            <h6>13.775 avaliações</span>
                                        </div>
                                        <div>
                                            <span>Café da Manhã incluso</span>
                                        </div>
                                    </div>
                                    <div class="precos">
                                        <div>
                                            <h>5 diárias, 1 hóspede</h>
                                        </div>
                                        <div>
                                            <span>RS</span> <h3>8.464</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-bottom">
                                    <h3>Acumule 1.OOO pontos com PAXfidelidade</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
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