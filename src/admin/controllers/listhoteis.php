<?php

    require_once("../../admin/model/admindao.php");

    class Listhotels {

        public function __construct() {
            $this->Listhotels();
        }

        public static function Listhotels() {
            $operator = AdminDAO::getAllHotel();
            foreach($operator as $op) {
                $data[] = [
                    "id" => $op->getId(),
                    "nome" => $op->getNome(),
                    "cnpj" => $op->getCNPJ(),
                    "celular" => $op->getCelular(),
                    "email" => $op->getEmail(),
                    "descricao" => $op->getDescricao(),
                    "quantidade_quarto" => $op->getQuantidade_quarto(),
                    "cep" => $op->getEndereco_cep(),
                    "numero" => $op->getEndereco_numero(),
                    "logradouro" => $op->getEndereco_logradouro(),
                    "bairro" => $op->getEndereco_bairro(),
                    "cidade" => $op->getEndereco_cidade(),
                    "estado" => $op->getEndereco_estado(),
                    "pais" => $op->getEndereco_pais(),
                    "avaliacao" => $op->getAvaliacao(),
                    "url" => $op->getURL(),
                    "comodidades" => $op->getComodidades(),
                    "data_cadastro" => $op->getData_cadatro()
                ];
            }

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum hotel cadastrado..."));
            }
        }

    }

    new Listhotels();

?>