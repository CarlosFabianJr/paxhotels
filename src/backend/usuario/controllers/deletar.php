<?php

    require_once("../../../backend/usuario/model/usuario.php");
    require_once("../../../backend/usuario/model/usuariodao.php");

    $id = $_POST["id"];

    $data = UsuarioDAO::delete($id);

    if($data == true) {
        header("location: ../../../admin/view/usuarios.php");
    } else {
        header("location: ../../../admin/view/usuarios.php");
    }

?>