<?php

    require_once("../../../backend/usuario/model/usuario.php");
    require_once("../../../backend/usuario/model/usuariodao.php");

    $nome = $_POST['nome'];

    $cpf = $_POST['cpf'];
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);

    $celular = $_POST['celular'] ?? null;
    $email = $_POST['email'] ?? null;
    $perfil = "USER";
    $senha = md5($_POST['senha']);
    $endereco_cep = $_POST['endereco_cep'];
    $endereco_numero = $_POST['endereco_numero'] ?? null;
    $endereco_logradouro = $_POST['endereco_logradouro'] ?? null;
    $endereco_bairro = $_POST['endereco_bairro'] ?? null;
    $endereco_cidade = $_POST['endereco_cidade'] ?? null;
    $endereco_estado = $_POST['endereco_estado'] ?? null;
    $endereco_pais = $_POST['endereco_pais'] ?? null;

    $Usuario = new Usuario();

    $Usuario->setNome($nome);
    $Usuario->setCPF($cpf);
    $Usuario->setCelular($celular);
    $Usuario->setEmail($email);
    $Usuario->setSenha($senha);
    $Usuario->setPerfil($perfil);
    $Usuario->setEndereco_cep($endereco_cep);
    $Usuario->setEndereco_numero($endereco_numero);
    $Usuario->setEndereco_logradouro($endereco_logradouro);
    $Usuario->setEndereco_bairro($endereco_bairro);
    $Usuario->setEndereco_cidade($endereco_cidade);
    $Usuario->setEndereco_estado($endereco_estado);
    $Usuario->setEndereco_pais($endereco_pais);

    $add = UsuarioDAO::insertFirstData($Usuario);

    if($add) {
        $username = explode(" ", $nome);
        $username = $username[0];

        // $_SESSION["Nome"] = $username;
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION["Cadastrado"] = $username;
        header("location: ../../../index.php");
    } else {
        $_SESSION["CadastroFail"] = "Erro ao Cadastrar!";
        header("location: ../../../index.php");
    }

?>