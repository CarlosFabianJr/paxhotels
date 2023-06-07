<?php

    require_once("../../admin/model/admindao.php");

    class ListhotelsStars {

        public function __construct() {
            $this->ListhotelsStars();
        }

        public static function ListhotelsStars() {
            $operator = AdminDAO::getHotelsStar();
            foreach($operator as $op) {
                $data[] = [
                    "nome" => $op->getNome(),
                    "cnpj" => $op->getCNPJmask(),
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

    new ListhotelsStars();

?>