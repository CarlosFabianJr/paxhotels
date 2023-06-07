<?php

    require_once("../../../backend/usuario/model/usuario.php");
    require_once("../../../backend/usuario/model/usuariodao.php");

    class UsuarioById {
        public function __construct() {
            $this->UsuarioById();
        }

        public static function UsuarioById() {
            $receivedData = file_get_contents("php://input");
            $dataJSON = json_decode($receivedData);

            $id = $dataJSON->id;

            $usuario = UsuarioDAO::getUsuarioById($id);

            $data = array(
                "id" => $usuario->getId(),
                "nome" => $usuario->getNome(),
                "cpf" => $usuario->getCPFmask(),
                "celular" => $usuario->getCelular(),
                "email" => $usuario->getEmail(),
                "cep" => $usuario->getEndereco_cep(),
                "numero" => $usuario->getEndereco_numero(),
                "logradouro" => $usuario->getEndereco_logradouro(),
                "bairro" => $usuario->getEndereco_bairro(),
                "cidade" => $usuario->getEndereco_cidade(),
                "estado" => $usuario->getEndereco_estado(),
                "pais" => $usuario->getEndereco_pais(),
                "url" => $usuario->getURL(),
                "data_cadastro" => $usuario->getData_cadatro()
            );

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum usuario cadastrado..."));
            }
        }
    }

    new UsuarioById();

?>