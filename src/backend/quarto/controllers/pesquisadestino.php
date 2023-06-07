<?php

    require_once("../../../backend/quarto/model/quarto.php");
    require_once("../../../backend/quarto/model/quartodao.php");

    class listQuartosLocalizacao {

        public function __construct() {
            $this->listQuartosLocalizacao();
        }

        public static function listQuartosLocalizacao() {
            $destino = $_POST['destino'] ?? null;
            $destin = explode(" - ", $destino);
            $cidade = $destin[0];
            $estado = $destin[1];
            $checkIn = $_POST['check-in'] ?? null;
            $checkOut = $_POST['check-out'] ?? null;
            $hospedes = $_POST['hospedes'] ?? null;
            $quartos = $_POST['quartos'] ?? null;

            $Quarto = new Quarto();

            $Quarto->setCidade($cidade);
            $Quarto->setEstado($estado);

            $operator = QuartoDAO::pesquisaLocalizacao($Quarto);

            if($operator) {
                foreach($operator as $op) {
                    $data[] = [
                        "idhotel" => $op->getId(),
                        "nome" => $op->getNomehotel(),
                        "avaliacao" => $op->getAvaliacao(),
                        "valor_diaria" => $op->getValor_diaria(),
                        "cidade" => $op->getCidade(),
                        "estado" => $op->getEstado(),
                        "pais" => $op->getPais(),
                        "comodidades" => $op->getComodidades(),
                        "classificacao" => $op->getClassificacao(),
                        "url" => $op->getUrl()
                    ];
                }

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION["quartos"] = $data;
                $_SESSION["pesquisa"] = array(
                    "destino" => $destino,
                    "checkIn" => $checkIn,
                    "checkOut" => $checkOut,
                    "hospedes" => $hospedes,
                    "quartos" => $quartos
                );
                
                header("location: ../../../views/hoteis.php");
            } else {
                header("location: ../../../views/main.php");
            }
        }

    }

    new listQuartosLocalizacao();

?>