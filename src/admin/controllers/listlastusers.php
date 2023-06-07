<?php

    require_once("../../admin/model/admindao.php");

    class ListLastUsers {

        public function __construct() {
            $this->ListLastUsers();
        }

        public static function ListLastUsers() {
            $operator = AdminDAO::getLastUsers();
            foreach($operator as $op) {
                $data[] = [
                    "nome" => $op->getNome(),
                    "cpf" => $op->getCpf(),
                    "data_cadastro" => $op->getData_cadastro()
                ];
            }

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum usuário cadastrado..."));
            }
        }

    }

    new ListLastUsers();

?>