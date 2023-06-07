<?php

    require_once("../model/quarto.php");
    require_once("../../hotel/model/hotel.php");
    require_once("../../../database/configDB.php");

    class QuartoDAO {

        public static function getAll() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM quarto";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Quarto();

                    $objeto->setId($row->Id);
                    $objeto->setIdHotel($row->idhotel);
                    $objeto->setNumero($row->numero);
                    $objeto->setDescricao($row->descricao);
                    $objeto->setValor_diaria($row->valor_diaria);
                    $objeto->setData_cadastro($row->data_cadatro);

                    $results[] = $objeto;
                }

                return $results;
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function insertFirstData(Quarto $quarto) {
            try {
                $PDO = connectDB::active();
                $sql = "INSERT INTO quarto
                        (idhotel, numero, descricao, valor_diaria)
                        VALUE
                        (:idhotel, :numero, :descricao, :valor_diaria)";
                $stmt = $PDO->prepare($sql);

                $stmt->bindValue(":idhotel", $quarto->getIdHotel());
                $stmt->bindValue(":numero", $quarto->getNumero());
                $stmt->bindValue(":descricao", $quarto->getDescricao());
                $stmt->bindValue(":valor_diaria", $quarto->getValor_diaria());

                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function update(Quarto $quarto) {
            $PDO = connectDB::active();
            $sql = "UPDATE quarto SET
                    idhotel = :idhotel,
                    numero = :numero,
                    descricao = :descricao,
                    valor_diaria = :valor_diaria
                    WHERE Id = :Id";
            $stmt = $PDO->prepare($sql);

            $stmt->bindValue(":idhotel", $quarto->getIdHotel());
            $stmt->bindValue(":numero", $quarto->getNumero());
            $stmt->bindValue(":descricao", $quarto->getDescricao());
            $stmt->bindValue(":valor_diaria", $quarto->getValor_diaria());
            $stmt->bindValue(":Id", $quarto->getId());

            $stmt->execute();

            if($stmt -> rowCount() > 0) {
                return $stmt->rowCount();
            } else {
                return false;
            }
        }

        public static function delete($Id) {
            try {
                $PDO = connectDB::active();
                $sql = "DELETE FROM quarto WHERE Id = :Id";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":Id", $Id);
                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function pesquisaLocalizacao(Quarto $quarto) {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT q.id, h.id as IdHotel, h.url, h.nome, h.avaliacao, h.comodidades, h.classificacao, h.endereco_cidade, h.endereco_estado, h.endereco_pais, q.valor_diaria FROM hotel h
                            INNER JOIN quarto q ON q.idhotel = h.id
                                WHERE h.endereco_cidade = :cidade AND h.endereco_estado = :estado
                                    GROUP BY h.id";
                $stmt = $PDO->prepare($sql);
                
                $stmt->bindValue(":cidade", $quarto->getCidade());
                $stmt->bindValue(":estado", $quarto->getEstado());
                $stmt->execute();
                
                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $quarto = new Quarto;

                    $quarto->setId($row->id);
                    $quarto->setIdHotel($row->IdHotel);
                    $quarto->setNomehotel($row->nome);
                    $quarto->setAvaliacao($row->avaliacao);
                    $quarto->setComodidades($row->comodidades);
                    $quarto->setClassificacao($row->classificacao);
                    $quarto->setCidade($row->endereco_cidade);
                    $quarto->setEstado($row->endereco_estado);
                    $quarto->setPais($row->endereco_pais);
                    $quarto->setValor_diaria($row->valor_diaria);
                    $quarto->setUrl($row->url);

                    $results[] = $quarto;
                }

                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

    }

?>