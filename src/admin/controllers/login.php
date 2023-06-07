<?php

    require_once("../../admin/model/admin.php");
    require_once("../../admin/model/admindao.php");

    $cpf = $_POST["cpf"];
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);
    $senha = md5($_POST["senha"]);

    $Admin = new Admin();

    $Admin->setCpf($cpf);
    $Admin->setSenha($senha);

    $login = AdminDAO::login($Admin);

    if(!isset($_SESSION)) {
        session_start();
    }

    $nome = $login->getNome();
    $nome = explode(" ", $nome);

    $_SESSION["Logado"] = $nome[0];
    header("location: ../view/main.php");

?>