<?php

    require_once("../../../backend/usuario/model/usuario.php");
    require_once("../../../backend/usuario/model/usuariodao.php");

    $nome = $_POST['nome'];

    $cpf = $_POST['cpf'];
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);

    $celular = $_POST['celular'] ?? null;
    $email = $_POST['email'] ?? null;
    $perfil = $_POST['perfil'] ?? "USER";
    $foto_url = "../../components/imgs/users/" . $_FILES["foto_user"]["name"] ?? null;
    $endereco_cep = $_POST['endereco_cep'] ?? null;
    $endereco_cep = str_replace("-", "", $endereco_cep);
    $endereco_numero = $_POST['endereco_numero'] ?? null;
    $endereco_logradouro = $_POST['endereco_logradouro'] ?? null;
    $endereco_bairro = $_POST['endereco_bairro'] ?? null;
    $endereco_cidade = $_POST['endereco_cidade'] ?? null;
    $endereco_estado = $_POST['endereco_estado'] ?? null;
    $endereco_pais = $_POST['endereco_pais'] ?? null;

    $id = intval($_POST['id']);

    $usuario = UsuarioDAO::getUsuarioById($id);

    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setCPF($cpf);
    $usuario->setCelular($celular);
    $usuario->setEmail($email);
    $usuario->setPerfil($perfil);
    $usuario->setEndereco_cep($endereco_cep);
    $usuario->setEndereco_numero($endereco_numero);
    $usuario->setEndereco_logradouro($endereco_logradouro);
    $usuario->setEndereco_bairro($endereco_bairro);
    $usuario->setEndereco_cidade($endereco_cidade);
    $usuario->setEndereco_estado($endereco_estado);
    $usuario->setEndereco_pais($endereco_pais);
    $usuario->setURL($foto_url);

    $res = UsuarioDAO::update($usuario);

    if($res) {
        header("location: ../../../admin/view/usuarios.php");
    } else {
        echo json_encode(array("Erro404" => "Nenhum usuário cadastrado..."));
    }

?>