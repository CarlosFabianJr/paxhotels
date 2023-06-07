<?php

    require_once("../../backend/usuario/model/usuario.php");
    require_once("../../backend/usuario/model/usuariodao.php");

    $email_login = $_POST['email'];
    $senha_login = md5($_POST['senha']);

    $Usuario = new Usuario();

    $Usuario->setEmail($email_login);
    $Usuario->setSenha($senha_login);
    
    $login = UsuarioDAO::login($Usuario);
    
    
    if(!isset($_SESSION)){
        session_start();
    }
    $nome = $login->getNome();
    $nome = explode(" ", $nome);


    $_SESSION["Logado"] = array(
        "nome" => $nome[0],
        "iduser" => $login->getId()
    );

    // var_dump($_SESSION["Logado"]["nome"]);
    header("location: ../../../index.php");






























    // session_start();
    // require_once("../database/configDB.php");

    // if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //     $email_login = $_POST['email'];
    //     $senha_login = md5($_POST['senha']);

    //     $sql_valida_login = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email_login' AND '$senha_login' ;");

    //     if(mysqli_num_rows($sql_valida_login) > 0) {
    //         $registros_login = mysqli_fetch_assoc($sql_valida_login);
            
    //         $nome = $registros_login['nome'];
    //         $nome = explode(" ", $nome);
    //         $nome = $nome[0];

    //         $_SESSION['nome'] = $nome;
    //         $_SESSION['perfil'] = $registros_login['perfil'];
    //         $_SESSION['Sucesso_Login'] = "Logado com Sucesso!!";
    //         header("location: ../index.php?msgSucesso=SucessoLogin");
    //     } else {
    //         unset($_SESSION['nome']);
    //         unset($_SESSION['senha']);
    //         header("location: ../index.php?msg=Erro ao entrar");

    //         $_SESSION['Error_Login'] = "Tente novamente ou fale com o administrador";
    //         header("location: ../index.php?msg=Erro ao entrar");
    //     }
    // } else {
    //     header("location: ../index.php?msg=Erro ao acessar");
    // }

?>