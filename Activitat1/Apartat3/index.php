<?php
ini_set('display_errors','On');
require __DIR__.'/src/connect.php';
require __DIR__.'/src/schema.php';
//conexion
$dbname="USERS";
$base=connectSqlite($dbname);

schemaGenerator($base);

include "views/login.php";
?>
