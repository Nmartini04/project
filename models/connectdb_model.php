<?php 
$files = array(
    './_config/bdd.php',
    '../_config/bdd.php',
    '../../_config/bdd.php'
);

foreach($files as $file){

    if(file_exists($file)){

        include_once $file ;
    }
}





class DB 
{
    protected $db;

    function __construct()
    {
        $dbClass = new BDD();
        $this->db = $dbClass->GetBDD();
    }
}


?>