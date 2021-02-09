# RDBMS (OOD)

## Entities:

- Database Manager
- Database
- Table
- Row

## Classes:

### DatabaseManager
- Databases Database[]

### Database
- Tables Table[]

### Table
- RowMap Row[] # map of rowID to row

### Row
- ID INT
- ColumnValueMap STRING[] # map of string to string
- CreatedDate DATETIME
- ModifiedDate DATETIME

--------------------------------------

From src/public folder start php local server -
./../php/php.exe -S localhost:8080 -c ../php/php.ini

--------------------------------------

### Test RDBMS Flow: