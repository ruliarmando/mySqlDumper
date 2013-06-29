<?php
require_once 'AbstractMySQLDump.class.php';

class MySQLDump_ms extends MySQLDump{
    
    protected $cmd;
    
    public function __construct($dbUser, $dbPass, $dbName, $dest, $zip = 'none'){
        
        $fname = $dbName.'.'.date('W').'.sql';
        if($dbPass !== ""){
            $this->cmd = 'c:/xampp/mysql/bin/mysqldump -u'.$dbUser.' -p'.$dbPass.' '.$dbName.' > '.$dest.'/'.$fname;
        }else{
            $this->cmd = 'c:/xampp/mysql/bin/mysqldump -u'.$dbUser.' '.$dbName.' > '.$dest.'/'.$fname;
        }
    }
}