<?php

require_once __DIR__ . "/../table/table.php";

class Database {
    private String $dbName;

    // Associative array (php replacement of map)
    // {tableName: tableInstance}
    private Array $tables; // Table[]

    public function __construct($dbName) {
        $this->dbName = $dbName;
    }

    public function GetDatabaseName() {
        return $this->dbName;
    }

    public function AddTable(Table $table) {
        $this->tables[$table->GetTableName()] = $table;
    }

    public function GetTables() {
        return $this->tables;
    }
}