<?php

    require_once("../../admin/model/admindao.php");

    class Listusers {

        public function __construct() {
            $this->Listusers();
        }

        public static function Listusers() {
            $operator = AdminDAO::getAllUsers();
            foreach($operator as $op) {
                $data[] = [
                    "id" => $op->getId(),
                    "nome" => $op->getNome(),
                    "cpf" => $op->getCPFmask(),
                    "celular" => $op->getCelular(),
                    "email" => $op->getEmail(),
                    "perfil" => $op->getPerfil(),
                    "url" => $op->getURL(),
                    "cep" => $op->getEndereco_cep(),
                    "numero" => $op->getEndereco_numero(),
                    "logradouro" => $op->getEndereco_logradouro(),
                    "bairro" => $op->getEndereco_bairro(),
                    "cidade" => $op->getEndereco_cidade(),
                    "estado" => $op->getEndereco_estado(),
                    "pais" => $op->getEndereco_pais(),
                    "data_cadastro" => $op->getData_cadatro()
                ];
            }

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum usuário cadastrado..."));
            }
        }

    }

    new Listusers();

?>