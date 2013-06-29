<?php

//test-backup

require_once 'AbstractMySQLDump.class.php';
try{
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'slim_blog';
    $dest = 'c:';
    $zip = 'none';
    $mysqlDump = MySQLDump::factory($dbUser, $dbPass, $dbName, $dest, $zip);
    $mysqlDump->backup();
    echo "backup DB: $dbName done";
}catch(Exception $e){
    echo $e->getMessage();
}

//https://github.com/ruliarmando/mySqlDumper.git