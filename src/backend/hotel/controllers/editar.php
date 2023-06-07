<?php

    require_once("../../../backend/hotel/model/hotel.php");
    require_once("../../../backend/hotel/model/hoteldao.php");

    $nome = $_POST['nome'];

    $cnpj = $_POST['cnpj'];
    $cnpj = str_replace('.', '', $cnpj);
    $cnpj = str_replace('.', '', $cnpj);
    $cnpj = str_replace('.', '', $cnpj);
    $cnpj = str_replace('/', '', $cnpj);
    $cnpj = str_replace('-', '', $cnpj);

    $celular = $_POST['celular'] ?? null;
    $email = $_POST['email'] ?? null;
    $descricao = $_POST["descricao"] ?? null;
    $quantidade_quarto = intval($_POST['quantidade_quarto']) ?? null;
    $avaliacao = $_POST['avaliacao'] ?? null;
    $classificacao = intval($_POST['classificacao']) ?? null;
    $foto_url = "../../components/imgs/hoteis/" . $_FILES["foto_hotel"]["name"] ?? null;
    $comodidades = $_POST["comodidades"] ?? null;
    $endereco_cep = $_POST['endereco_cep'] ?? null;
    $endereco_cep = str_replace("-", "", $endereco_cep);
    $endereco_numero = $_POST['endereco_numero'] ?? null;
    $endereco_logradouro = $_POST['endereco_logradouro'] ?? null;
    $endereco_bairro = $_POST['endereco_bairro'] ?? null;
    $endereco_cidade = $_POST['endereco_cidade'] ?? null;
    $endereco_estado = $_POST['endereco_estado'] ?? null;
    $endereco_pais = $_POST['endereco_pais'] ?? null;

    $id = intval($_POST['id']);

    $hotel = HotelDAO::getHotelById($id);

    $hotel->setId($id);
    $hotel->setNome($nome);
    $hotel->setCNPJ($cnpj);
    $hotel->setCelular($celular);
    $hotel->setEmail($email);
    $hotel->setDescricao($descricao);
    $hotel->setQuantidade_quarto($quantidade_quarto);
    $hotel->setEndereco_cep($endereco_cep);
    $hotel->setEndereco_numero($endereco_numero);
    $hotel->setEndereco_logradouro($endereco_logradouro);
    $hotel->setEndereco_bairro($endereco_bairro);
    $hotel->setEndereco_cidade($endereco_cidade);
    $hotel->setEndereco_estado($endereco_estado);
    $hotel->setEndereco_pais($endereco_pais);
    $hotel->setAvaliacao($avaliacao);
    $hotel->setURL($foto_url);
    $hotel->setComodidades($comodidades);
            $hotel->setClassificacao($classificacao);

    $res = HotelDAO::update($hotel);

    if($res) {
        header("location: ../../../admin/view/hoteis.php");
    } else {
        echo json_encode(array("Erro404" => "Nenhum hotel cadastrado..."));
    }

?>