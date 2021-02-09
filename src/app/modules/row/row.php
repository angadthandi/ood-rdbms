<?php

class Row {
    private Int $rowID;

    // Associative array (php replacement of map)
    // {rowID : {columnName: columnValue}}
    private Array $data; // String[]

    private static Int $tableRowNum = 0;

    public function __construct(Int $rowID) {
        if ($rowID == 0) {
            static::$tableRowNum++;
            $this->rowID = static::$tableRowNum;
            return;
        }
    
        $this->rowID = $rowID;
    }

    public function GetRowID() {
        return (string)$this->rowID;
    }

    // rowData - associative array {string: string}
    public function UpdateData(Array $rowData) {
        $this->data[(string)$this->rowID] = $rowData;
    }

    public function GetData() {
        return $this->data[(string)$this->rowID];
    }
}