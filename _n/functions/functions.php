<?php 

    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','_nadmin');
    define('INC','includes/');

    class Database {
        
    }

    class Tools {
        
        public function get_part($part_name){
            include_once(INC.$part_name.".php");
        }
        
    }

    $oTools = new Tools();
    $oDb = new Database();


?>