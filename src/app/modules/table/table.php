<?php

require_once __DIR__ . "/../row/row.php";

class Table {
    private String $tableName;

    // Associative array (php replacement of map)
    // {rowID: rowInstance}
    private Array $rows; // Row[]

    public function __construct($tableName) {
        $this->tableName = $tableName;
    }

    public function GetTableName() {
        return $this->tableName;
    }

    public function AddRow(Row $row) {
        $this->rows[$row->GetRowID()] = $row;
    }

    public function GetRows() {
        return $this->rows;
    }
}