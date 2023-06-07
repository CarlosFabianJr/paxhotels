<?php

    require_once("../model/hotel.php");
    require_once("../../../database/configDB.php");

    class HotelDAO {

        public static function getAll() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM hotel";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Hotel();

                    $objeto->setId($row->id);
                    $objeto->setNome($row->nome);
                    $objeto->setCNPJ($row->cnpj);
                    $objeto->setCelular($row->celular);
                    $objeto->setEmail($row->email);
                    $objeto->setDescricao($row->descricao);
                    $objeto->setQuantidade_quarto($row->quantidade_quarto);
                    $objeto->setEndereco_cep($row->endereco_cep);
                    $objeto->setEndereco_numero($row->endereco_numero);
                    $objeto->setEndereco_logradouro($row->endereco_logradouro);
                    $objeto->setEndereco_bairro($row->endereco_bairro);
                    $objeto->setEndereco_cidade($row->endereco_cidade);
                    $objeto->setEndereco_estado($row->endereco_estado);
                    $objeto->setEndereco_pais($row->endereco_pais);
                    $objeto->setClassificacao($row->classificacao);
                    $objeto->setAvaliacao($row->avaliacao);
                    $objeto->setURL($row->url);
                    $objeto->setComodidades($row->comodidades);
                    $objeto->setData_cadatro($row->data_cadastro);

                    $results[] = $objeto;
                }

                return $results;
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function insert(Hotel $hotel) {
            try {
                $PDO = connectDB::active();
                $sql = "INSERT INTO hotel
                        (nome, cnpj, celular, email, descricao, avaliacao, classificacao, url, comodidades, quantidade_quarto, endereco_cep, endereco_numero, endereco_logradouro, endereco_bairro, endereco_cidade, endereco_estado, endereco_pais)
                        VALUE
                        (:nome, :cnpj, :celular, :email, :descricao, :avaliacao, :classificacao, :url, :comodidades, :quantidade_quarto, :endereco_cep, :endereco_numero, :endereco_logradouro, :endereco_bairro, :endereco_cidade, :endereco_estado, :endereco_pais)";
                $stmt = $PDO->prepare($sql);

                $stmt->bindValue(":nome", $hotel->getNome());
                $stmt->bindValue(":cnpj", $hotel->getcnpj());
                $stmt->bindValue(":celular", $hotel->getCelular());
                $stmt->bindValue(":email", $hotel->getEmail());
                $stmt->bindValue(":descricao", $hotel->getDescricao());
                $stmt->bindValue(":avaliacao", $hotel->getAvaliacao());
                $stmt->bindValue(":classificacao", $hotel->getClassificacao());
                $stmt->bindValue(":url", $hotel->getURL());
                $stmt->bindValue(":comodidades", $hotel->getComodidades());
                $stmt->bindValue(":quantidade_quarto", $hotel->getquantidade_quarto());
                $stmt->bindValue(":endereco_cep", $hotel->getEndereco_cep());
                $stmt->bindValue(":endereco_numero", $hotel->getEndereco_numero());
                $stmt->bindValue(":endereco_logradouro", $hotel->getEndereco_logradouro());
                $stmt->bindValue(":endereco_bairro", $hotel->getEndereco_bairro());
                $stmt->bindValue(":endereco_cidade", $hotel->getEndereco_cidade());
                $stmt->bindValue(":endereco_estado", $hotel->getEndereco_estado());
                $stmt->bindValue(":endereco_pais", $hotel->getEndereco_pais());

                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function update(Hotel $hotel) {
            $PDO = connectDB::active();
            $sql = "UPDATE hotel SET
                        nome = :nome,
                        cnpj = :cnpj,
                        celular = :celular,
                        email = :email,
                        quantidade_quarto = :quantidade_quarto,
                        descricao = :descricao,
                        url = :url,
                        avaliacao = :avaliacao,
                        comodidades = comodidades,
                        classificacao = :classificacao,
                        endereco_cep = :endereco_cep,
                        endereco_numero = :endereco_numero,
                        endereco_logradouro = :endereco_logradouro,
                        endereco_cidade = :endereco_cidade,
                        endereco_estado = :endereco_estado,
                        endereco_pais = :endereco_pais
                    WHERE id = :Id";
            $stmt = $PDO->prepare($sql);

            var_dump($hotel);

            $stmt->bindValue(":nome", $hotel->getNome());
            $stmt->bindValue(":cnpj", $hotel->getcnpj());
            $stmt->bindValue(":celular", $hotel->getCelular());
            $stmt->bindValue(":email", $hotel->getEmail());
            $stmt->bindValue(":quantidade_quarto", $hotel->getquantidade_quarto());
            $stmt->bindValue(":descricao", $hotel->getdescricao());
            $stmt->bindValue(":classificacao", $hotel->getClassificacao());
            $stmt->bindValue(":avaliacao", $hotel->getAvaliacao());
            $stmt->bindValue(":url", $hotel->getURL());
            $stmt->bindValue(":comodidades", $hotel->getComodidades());
            $stmt->bindValue(":endereco_cep", $hotel->getEndereco_cep());
            $stmt->bindValue(":endereco_numero", $hotel->getEndereco_numero());
            $stmt->bindValue(":endereco_logradouro", $hotel->getEndereco_logradouro());
            $stmt->bindValue(":endereco_cidade", $hotel->getEndereco_cidade());
            $stmt->bindValue(":endereco_estado", $hotel->getEndereco_estado());
            $stmt->bindValue(":endereco_pais", $hotel->getEndereco_pais());
            $stmt->bindValue(":Id", $hotel->getId());

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
                $sql = "DELETE FROM hotel WHERE id = :Id";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":Id", $Id);
                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function pesquisaHotel(Hotel $hotel) {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM hotel WHERE endereco_cidade = ':cidade' AND endereco_estado = ':estado' ";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":cidade", $hotel->getEndereco_cidade());
                $stmt->bindValue(":estado", $hotel->getEndereco_estado());
                $stmt->execute();

                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Hotel;

                    $objeto->setId($row->id);
                    $objeto->setNome($row->nome);
                    $objeto->setCNPJ($row->cnpj);
                    $objeto->setCelular($row->celular);
                    $objeto->setEmail($row->email);
                    $objeto->setDescricao($row->descricao);
                    $objeto->setQuantidade_quarto($row->quantidade_quarto);
                    $objeto->setClassificacao($row->classificacao);
                    $objeto->setEndereco_cep($row->endereco_cep);
                    $objeto->setEndereco_numero($row->endereco_numero);
                    $objeto->setEndereco_logradouro($row->endereco_logradouro);
                    $objeto->setEndereco_cidade($row->endereco_cidade);
                    $objeto->setEndereco_estado($row->endereco_estado);
                    $objeto->setEndereco_pais($row->endereco_pais);
                    $objeto->setData_cadatro($row->data_cadatro);

                    $results[] = $objeto;
                }

                return $results;

            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getHotelById($id) : Hotel {
            try {
                $param[":id"] = $id;
                $PDO = connectDB::active();
                $sql = "SELECT * FROM hotel WHERE id = :id;";
                $stmt = $PDO->prepare($sql);
                $stmt->execute($param);

                $row = $stmt->fetch(PDO::FETCH_OBJ);
                $hotel = new Hotel();
                if(!empty($row)) {
                    $hotel->setId($row->id);
                    $hotel->setNome($row->nome);
                    $hotel->setCNPJ($row->cnpj);
                    $hotel->setCelular($row->celular);
                    $hotel->setEmail($row->email);
                    $hotel->setDescricao($row->descricao);
                    $hotel->setQuantidade_quarto($row->quantidade_quarto);
                    $hotel->setEndereco_cep($row->endereco_cep);
                    $hotel->setEndereco_numero($row->endereco_numero);
                    $hotel->setEndereco_logradouro($row->endereco_logradouro);
                    $hotel->setEndereco_bairro($row->endereco_bairro);
                    $hotel->setEndereco_cidade($row->endereco_cidade);
                    $hotel->setEndereco_estado($row->endereco_estado);
                    $hotel->setEndereco_pais($row->endereco_pais);
                    $hotel->setClassificacao($row->classificacao);
                    $hotel->setAvaliacao($row->avaliacao);
                    $hotel->setURL($row->url);
                    $hotel->setComodidades($row->comodidades);
                    $hotel->setData_cadatro($row->data_cadastro);
                }

                return empty($hotel) ? new Hotel : $hotel;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

    }

?>