<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
    header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS");

    class connectDB {

        static $active;
        public static function active() {
            static $host = "localhost";
            static $user = "root";
            static $senha = "Timoteo@24";
            static $db_name = "paxhotels";

            $active = new PDO("mysql:host=$host; port=3306; dbname=$db_name; charset=utf8", $user, $senha);
            return $active;
        }

    }

?>