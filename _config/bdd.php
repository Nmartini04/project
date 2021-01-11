<?php


class BDD
{
    function GetBDD()
    {
        $user = "root";
        $pass ="";
        try {
            $db = new PDO('mysql:host=localhost;dbname=coiffure', $user, $pass);
            return $db;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
}


?>