<?php

abstract class connectDb {

    const USER = "root";
    const PASS = "";

    private static $instance = null;

    private static function conectar() {

        try {
            if (self::$instance == null):
                $connectString = "mysql:host=localhost;dbname=contact";
                self::$instance = new PDO($connectString, self::USER, self::PASS);
            endif;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        return self::$instance;
    }
    protected static function getDB() {
        return self::conectar();
    }

}
