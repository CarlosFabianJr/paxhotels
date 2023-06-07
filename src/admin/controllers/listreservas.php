<?php

    require_once("../../admin/model/admindao.php");

    class Listreservas {

        public function __construct() {
            $this->Listreservas();
        }

        public static function Listreservas() {
            $operator = AdminDAO::getReservas();
            foreach($operator as $op) {
                $data[] = [
                    "id" => $op->getId(),
                    "iduser" => $op->getIduser(),
                    "idquarto" => $op->getIdquarto(),
                    "nomeuser" => $op->getNomeuser(),
                    "nomehotel" => $op->getNomehotel(),
                    "status" => $op->getStatus(),
                    "numero" => $op->getNumero(),
                    "data_reserva" => $op->getData_reserva()
                ];
            }

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhuma reserva cadastrado..."));
            }
        }

    }

    new Listreservas();

?>