<?php

    // require_once("../../../database/connection/configDB.php");
    require_once("usuario.php");

    class connectDB {

        static $active;
        public static function active() {
            // static $host = "us-cdbr-east-06.cleardb.net";
            // static $user = "bd2d239bf3b339";
            // static $senha = "24ca4824";
            // static $db_name = "heroku_4674f3c585da4ec";

            static $host = "localhost";
            static $user = "root";
            static $senha = "Timoteo@24";
            static $db_name = "paxhotels";

            $active = new PDO("mysql:host=$host; port=3306; dbname=$db_name; charset=utf8", $user, $senha);
            return $active;
        }

    }

    class UsuarioDAO {

        public static function getAll() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Usuario();

                    $objeto->setId($row->Id);
                    $objeto->setNome($row->nome);
                    $objeto->setCPF($row->cpf);
                    $objeto->setCelular($row->celular);
                    $objeto->setEmail($row->email);
                    $objeto->setPerfil($row->perfil);
                    $objeto->setSenha($row->senha);
                    $objeto->setEndereco_cep($row->endereco_cep);
                    $objeto->setEndereco_numero($row->endereco_numero);
                    $objeto->setEndereco_logradouro($row->endereco_logradouro);
                    $objeto->setEndereco_cidade($row->endereco_cidade);
                    $objeto->setEndereco_estado($row->endereco_estado);
                    $objeto->setEndereco_pais($row->endereco_pais);
                    $objeto->setDados_pagamento_forma($row->dados_pagamento_forma);
                    $objeto->setDados_pagamento_tipo_cartao($row->dados_pagamento_tipo_cartao);
                    $objeto->setDados_pagamento_numero_cartao($row->dados_pagamento_numero_cartao);
                    $objeto->setDados_pagamento_codigo_cartao($row->dados_pagamento_codigo_cartao);
                    $objeto->setDados_pagamento_validade_cartao($row->dados_pagamento_validade_cartao);
                    $objeto->setData_cadatro($row->data_cadatro);

                    $results[] = $objeto;
                }

                return $results;
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function insertFirstData(Usuario $usuario) {
            try {
                $PDO = connectDB::active();
                $sql = "INSERT INTO usuario
                        (nome, cpf, celular, email, senha, endereco_cep, endereco_numero, endereco_logradouro, endereco_cidade, endereco_estado, endereco_pais)
                        VALUE
                        (:nome, :cpf, :celular, :email, :senha, :endereco_cep, :endereco_numero, :endereco_logradouro, :endereco_cidade, :endereco_estado, :endereco_pais)";
                $stmt = $PDO->prepare($sql);

                $stmt->bindValue(":nome", $usuario->getNome());
                $stmt->bindValue(":cpf", $usuario->getCPF());
                $stmt->bindValue(":celular", $usuario->getCelular());
                $stmt->bindValue(":email", $usuario->getEmail());
                $stmt->bindValue(":senha", $usuario->getSenha());
                $stmt->bindValue(":endereco_cep", $usuario->getEndereco_cep());
                $stmt->bindValue(":endereco_numero", $usuario->getEndereco_numero());
                $stmt->bindValue(":endereco_logradouro", $usuario->getEndereco_logradouro());
                $stmt->bindValue(":endereco_cidade", $usuario->getEndereco_cidade());
                $stmt->bindValue(":endereco_estado", $usuario->getEndereco_estado());
                $stmt->bindValue(":endereco_pais", $usuario->getEndereco_pais());

                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function insertDadosPagamento(Usuario $usuario) {
            try {
                $PDO = connectDB::active();
                $sql = "UPDATE usuario SET
                        dados_pagamento_forma = :dados_pagamento_forma,
                        dados_pagamento_tipo_cartao = :dados_pagamento_tipo_cartao,
                        dados_pagamento_numero_cartao = :dados_pagamento_numero_cartao,
                        dados_pagamento_codigo_cartao = :dados_pagamento_codigo_cartao,
                        dados_pagamento_validade_cartao = :dados_pagamento_validade_cartao
                        WHERE Id = :Id";
                $stmt = $PDO->prepare($sql);

                $stmt->bindValue(":dados_pagamento_forma", $usuario->getDados_pagamento_forma());
                $stmt->bindValue(":dados_pagamento_tipo_cartao", $usuario->getDados_pagamento_tipo_cartao());
                $stmt->bindValue(":dados_pagamento_numero_cartao", $usuario->getDados_pagamento_numero_cartao());
                $stmt->bindValue(":dados_pagamento_codigo_cartao", $usuario->getDados_pagamento_codigo_cartao());
                $stmt->bindValue(":dados_pagamento_validade_cartao", $usuario->getDados_pagamento_validade_cartao());
                $stmt->bindValue(":Id", $usuario->getId());

                $stmt->execute();

                if($stmt -> rowCount() > 0) {
                    return $stmt->rowCount();
                } else {
                    return false;
                }
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function update(Usuario $usuario) {
            $PDO = connectDB::active();
            $sql = "UPDATE usuario SET
                    nome = :nome,
                    cpf = :cpf,
                    celular = :celular,
                    email = :email,
                    -- senha = :senha,
                    perfil = :perfil,
                    endereco_cep = :endereco_cep,
                    endereco_numero = :endereco_numero,
                    endereco_logradouro = :endereco_logradouro,
                    endereco_cidade = :endereco_cidade,
                    endereco_estado = :endereco_estado,
                    endereco_pais = :endereco_pais
                    WHERE Id = :Id";
            $stmt = $PDO->prepare($sql);

            $stmt->bindValue(":nome", $usuario->getNome());
            $stmt->bindValue(":cpf", $usuario->getCPF());
            $stmt->bindValue(":celular", $usuario->getCelular());
            $stmt->bindValue(":email", $usuario->getEmail());
            // $stmt->bindValue(":senha", $usuario->getSenha());
            $stmt->bindValue(":perfil", $usuario->getPerfil());
            $stmt->bindValue(":endereco_cep", $usuario->getEndereco_cep());
            $stmt->bindValue(":endereco_numero", $usuario->getEndereco_numero());
            $stmt->bindValue(":endereco_logradouro", $usuario->getEndereco_logradouro());
            $stmt->bindValue(":endereco_cidade", $usuario->getEndereco_cidade());
            $stmt->bindValue(":endereco_estado", $usuario->getEndereco_estado());
            $stmt->bindValue(":endereco_pais", $usuario->getEndereco_pais());
            $stmt->bindValue(":Id", $usuario->getId());

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
                $sql = "DELETE FROM usuario WHERE Id = :Id";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":Id", $Id);
                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function login(Usuario $usuario) {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario
                            WHERE email = :email AND senha = :senha;";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":email", $usuario->getEmail());
                $stmt->bindValue(":senha", $usuario->getSenha());
                $stmt->execute();

                $row = $stmt->fetch(PDO::FETCH_OBJ);
                $Usuario = new Usuario;
                if (!empty($row)) {
                    $Usuario->setId($row->id);
                    $Usuario->setNome($row->nome);
                    $Usuario->setPerfil($row->perfil);
                }

                return empty($Usuario) ? new Usuario() : $Usuario;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function getUsuarioById($id) : Usuario {
            try {
                $param[":id"] = $id;
                $PDO = connectDB::active();
                $sql = "SELECT * FROM usuario WHERE id = :id;";
                $stmt = $PDO->prepare($sql);
                $stmt->execute($param);

                $row = $stmt->fetch(PDO::FETCH_OBJ);
                $usuario = new Usuario();
                if(!empty($row)) {
                    $usuario->setId($row->id);
                    $usuario->setNome($row->nome);
                    $usuario->setCPF($row->cpf);
                    $usuario->setCelular($row->celular);
                    $usuario->setEmail($row->email);
                    $usuario->setEndereco_cep($row->endereco_cep);
                    $usuario->setEndereco_numero($row->endereco_numero);
                    $usuario->setEndereco_logradouro($row->endereco_logradouro);
                    $usuario->setEndereco_bairro($row->endereco_bairro);
                    $usuario->setEndereco_cidade($row->endereco_cidade);
                    $usuario->setEndereco_estado($row->endereco_estado);
                    $usuario->setEndereco_pais($row->endereco_pais);
                    $usuario->setURL($row->url);
                    $usuario->setData_cadatro($row->data_cadastro);
                }

                return empty($usuario) ? new Usuario : $usuario;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

    }

?>