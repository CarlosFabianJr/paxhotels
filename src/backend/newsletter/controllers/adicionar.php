<?php

    require_once("../../../backend/newsletter/model/newsletter.php");
    require_once("../../../backend/newsletter/model/newsletterdao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'] ?? null;

    $Newsletter = new Newsletter();

    $Newsletter->setNome($nome);
    $Newsletter->setEmail($email);

    $add = NewsletterDAO::insert($Newsletter);

    if($add) {
        // $_SESSION["Nome"] = $username;
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION["NewsOk"] = "NewsOk";
        header("location: ../../../../index.php");
    } else {
        $_SESSION["NewsFail"] = "Erro ao Cadastrar!";
        header("location: ../../../../index.php");
    }

?>