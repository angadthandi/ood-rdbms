<?php

require_once __DIR__ . "/../database/database.php";

class DatabaseManager {
    private static DatabaseManager $instance;

    // Associative array (php replacement of map)
    // {databaseName: databaseInstance}
    private Array $databases; // Database[]

    private function __construct() {}

    public static function GetInstance() {
        if (!empty(self::$instance)) {
            error_log(
                "return existing DatabaseManager instance!"
            );
            return self::$instance;
        }

        error_log(
            "create new singleton DatabaseManager instance!"
        );
        self::$instance = new DatabaseManager;
        return self::$instance;
    }

    public function AddDatabase(Database $db) {
        $this->databases[$db->GetDatabaseName()] = $db;
    }

    public function GetDatabases() {
        return $this->databases;
    }
}