<?php

    require_once("../model/newsletter.php");
    require_once("../../../database/configDB.php");

    class NewsletterDAO {

        public static function getAll() {
            try {
                $PDO = connectDB::active();
                $sql = "SELECT * FROM newsletter";
                $stmt = $PDO->prepare($sql);
                $stmt->execute();

                $results = array();
                while($row = $stmt -> fetch(PDO::FETCH_OBJ)) {
                    $objeto = new Newsletter();

                    $objeto->setId($row->Id);
                    $objeto->setNome($row->nome);
                    $objeto->setEmail($row->email);

                    $results[] = $objeto;
                }

                return $results;
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function insert(Newsletter $newsletter) {
            try {
                $PDO = connectDB::active();
                $sql = "INSERT INTO newsletter
                        (nome, email)
                        VALUE
                        (:nome, :email)";
                $stmt = $PDO->prepare($sql);

                $stmt->bindValue(":nome", $newsletter->getNome());
                $stmt->bindValue(":email", $newsletter->getEmail());

                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

        public static function update(Newsletter $newsletter) {
            $PDO = connectDB::active();
            $sql = "UPDATE newsletter SET
                    nome = :nome,
                    email = :email
                    WHERE Id = :Id";
            $stmt = $PDO->prepare($sql);

            $stmt->bindValue(":nome", $newsletter->getNome());
            $stmt->bindValue(":email", $newsletter->getEmail());
            $stmt->bindValue(":Id", $newsletter->getId());

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
                $sql = "DELETE FROM newsletter WHERE Id = :Id";
                $stmt = $PDO->prepare($sql);
                $stmt->bindValue(":Id", $Id);
                $stmt->execute();

                return true;
            } catch(Exception $e) {
                throw new Exception($e->getMessage());
            }
        }

    }

?>