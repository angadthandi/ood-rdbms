<?php

require_once __DIR__ . "/../app/modules/databasemanager/databasemanager.php";
require_once __DIR__ . "/../app/modules/database/database.php";
require_once __DIR__ . "/../app/modules/table/table.php";
require_once __DIR__ . "/../app/modules/row/row.php";

$userRow = new Row(0);
$userRow->UpdateData(['Username'=>'Angad', 'Password'=>'password']);

$tableUser = new Table("User");
$tableUser->AddRow($userRow);
$tableFriend = new Table("Friend");

$db = new Database("AppDB");
$db->AddTable($tableUser);
$db->AddTable($tableFriend);
$tables = $db->GetTables();

$dbManager = DatabaseManager::GetInstance();
$dbManager->AddDatabase($db);
$dbs = $dbManager->GetDatabases();

error_log('$dbs : ');
error_log(print_r($dbs,true));

?>