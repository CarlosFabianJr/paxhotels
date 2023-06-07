<?php

    require_once("../../admin/model/admindao.php");

    class ListpaisesStars {

        public function __construct() {
            $this->ListpaisesStars();
        }

        public static function ListpaisesStars() {
            $operator = AdminDAO::getPaisesStar();
            foreach($operator as $op) {
                $data[] = [
                    "pais" => $op->getEndereco_pais(),
                    "porc" => "45%"
                ];
            }

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum País cadastrado..."));
            }
        }

    }

    new ListpaisesStars();

?>