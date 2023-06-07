<?php

    require_once("../../../backend/hotel/model/hotel.php");
    require_once("../../../backend/hotel/model/hoteldao.php");

    class HotelById {
        public function __construct() {
            $this->HotelById();
        }

        public static function HotelById() {
            $receivedData = file_get_contents("php://input");
            $dataJSON = json_decode($receivedData);

            $id = $dataJSON->id;

            $hotel = HotelDAO::getHotelById($id);

            $data = array(
                "id" => $hotel->getId(),
                "nome" => $hotel->getNome(),
                "cnpj" => $hotel->getCNPJ(),
                "celular" => $hotel->getCelular(),
                "email" => $hotel->getEmail(),
                "descricao" => $hotel->getDescricao(),
                "quantidade_quarto" => $hotel->getQuantidade_quarto(),
                "cep" => $hotel->getEndereco_cep(),
                "numero" => $hotel->getEndereco_numero(),
                "logradouro" => $hotel->getEndereco_logradouro(),
                "bairro" => $hotel->getEndereco_bairro(),
                "cidade" => $hotel->getEndereco_cidade(),
                "estado" => $hotel->getEndereco_estado(),
                "pais" => $hotel->getEndereco_pais(),
                "avaliacao" => $hotel->getAvaliacao(),
                "url" => $hotel->getURL(),
                "comodidades" => $hotel->getComodidades(),
                "classificacao" => $hotel->getClassificacao(),
                "data_cadastro" => $hotel->getData_cadatro()
            );

            if(!empty($data)) {
                echo json_encode($data);
            } else {
                echo json_encode(array("Erro404" => "Nenhum hotel cadastrado..."));
            }
        }
    }

    new HotelById();

?>