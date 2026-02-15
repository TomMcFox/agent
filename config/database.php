<?php

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $config = require __DIR__ . '/login.php'; 

        $dsn = "mysql:host={$config['db']['servername']};dbname={$config['db']['dbname']};charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $config['db']['username'], $config['db']['password'], $options);
        } catch (PDOException $e) {
            die("Datenbank-Verbindung fehlgeschlagen: " . $e->getMessage());
        }
    }

    // Singleton-Pattern: Stellt sicher, dass nur EINE Verbindung offen ist
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
}

?>