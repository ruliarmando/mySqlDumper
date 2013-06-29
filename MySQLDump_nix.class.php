<?php
require_once 'AbstractMySQLDump.class.php';

class MySQLDump_nix extends MySQLDump{
    
    protected $cmd;
    
    public function __construct($dbUser, $dbPass, $dbName, $dest, $zip = 'gz'){
        $zip_util = array(
            'gz'=>'gzip',
            'bz2'=>'bzip2',
        );
        
        if(array_key_exists($zip, $zip_util)){
            $fname = $dbName.'.'.date('W').'.sql'.$zip;
            $this->cmd = 'mysqldump -u'.$dbUser.' -p'.$dbPass.' '.$dbName.' | '.$zip_util[$zip].' > '.$dest.'/'.$fname;
        }else{
            $fname = $dbName.'.'.date('W').'.sql';
            $this->cmd = 'mysqldump -u '.$dbUser.' -p '.$dbPass.' '.$dbName.' | '.$zip_util[$zip].' > '.$dest.'/'.$fname;
        }
    }
}