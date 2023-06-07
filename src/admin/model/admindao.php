<?php

    require_once("../../database/configDB.php");
    require_once("../../admin/model/admin.php");
    require_once("../../backend/hotel/model/hotel.php");
    require_once("../../backend/usuario/model/usuario.php");
    require_once("../../backend/reserva/model/reserva.php");

    class AdminDAO {

        public static function login(Admin $admin) {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario
                            WHERE cpf = :cpf AND senha = :senha; AND perfil = 'ADMIN'";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":cpf", $admin->getCpf());
                $stmt->bindValue(":senha", $admin->getSenha());
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_OBJ);
                $Admin = new Admin;
                if(!empty($row)) {
                    $Admin->setCpf($row->cpf);
                    $Admin->setNome($row->nome);
                    $Admin->setEmail($row->email);
                }

                return empty($Admin) ? new Admin : $Admin;

            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getLastUsers() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario ORDER BY id DESC";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();

                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Admin();

                    $objeto->setNome($row->nome);
                    $objeto->setCpf($row->cpf);
                    $objeto->setData_cadastro($row->data_cadastro);

                    $results[] = $objeto;
                }

                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getHotelsStar() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT COUNT(h.id) AS num, h.nome, h.cnpj, h.data_cadastro FROM hotel h
                            INNER JOIN quarto q ON q.idhotel = h.id
                                GROUP BY h.id ORDER BY num DESC";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();

                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Hotel();

                    $objeto->setNome($row->nome);
                    $objeto->setCNPJ($row->cnpj);
                    $objeto->setData_cadatro($row->data_cadastro);

                    $results[] = $objeto;
                }

                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
        public static function getPaisesStar() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT COUNT(h.id) AS num, h.endereco_pais FROM hotel h
                            INNER JOIN quarto q ON q.idhotel = h.id
                                GROUP BY h.endereco_pais ORDER BY num DESC";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();

                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Hotel();

                    $objeto->setEndereco_pais($row->endereco_pais);

                    $results[] = $objeto;
                }

                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getAllHotel() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM hotel";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();

                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
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
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getAllUsers() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();

                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Usuario();

                    $objeto->setId($row->id);
                    $objeto->setNome($row->nome);
                    $objeto->setCPF($row->cpf);
                    $objeto->setCelular($row->celular);
                    $objeto->setEmail($row->email);
                    $objeto->setSenha($row->senha);
                    $objeto->setPerfil($row->perfil);
                    $objeto->setEndereco_cep($row->endereco_cep);
                    $objeto->setEndereco_numero($row->endereco_numero);
                    $objeto->setEndereco_logradouro($row->endereco_logradouro);
                    $objeto->setEndereco_bairro($row->endereco_bairro);
                    $objeto->setEndereco_cidade($row->endereco_cidade);
                    $objeto->setEndereco_estado($row->endereco_estado);
                    $objeto->setEndereco_pais($row->endereco_pais);
                    $objeto->setData_cadatro($row->data_cadastro);

                    $results[] = $objeto;
                }

                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getReservas() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT r.*, q.numero, u.nome as NomeUser, h.nome as NomeHotel FROM reserva r
                            INNER JOIN quarto q ON q.id - r.idquarto
                                INNER JOIN hotel h ON q.idhotel = h.id
                                    INNER JOIN usuario u ON r.idusuario = u.id
                                        GROUP BY r.idusuario";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();
                while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Reserva();

                    $objeto->setId($row->id);
                    $objeto->setNomeuser($row->NomeUser);
                    $objeto->setNomehotel($row->NomeHotel);
                    $objeto->setIdquarto($row->idquarto);
                    $objeto->setIduser($row->idusuario);
                    $objeto->setNumero($row->numero);
                    $objeto->setStatus($row->status);
                    $objeto->setData_reserva($row->data_reserva);

                    $results[] = $objeto;
                }
                return $results;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

    }

?>