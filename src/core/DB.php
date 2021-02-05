<?php
namespace src\core;

class DB{
    static \PDO $db;

    public static function getDB(): \PDO {
        self::$db = new \PDO("mysql:host=localhost;port=3306;dbname=instagram;charset=utf8mb4", "root", "");

        return self::$db;
    }

    public static function fetch(string $sql, array $arr) {
        $stmt = self::getDB() -> prepare($sql);
        $stmt -> execute($arr);
        $result = $stmt;

        return $result -> fetch();
    }

    public static function fetchAll(string $sql, array $arr): array {
        $stmt = self::getDB() -> prepare($sql);
        $stmt -> execute($arr);
        $result = $stmt;

        return $result -> fetchAll();
    }
};