<?php

include_once 'connectdb_model.php';

class Pricing extends DB
{

    public $id;
    public $nom;
    public $prix;
    public $style;


    public function __construct()
    {
        parent::__construct();
    }

    public function GetPriceStyliste()
    {
        $sth = $this->db->prepare("SELECT * FROM prestations WHERE style='styliste'");
        $sth->execute();
        $styliste = $sth->fetchAll();
        $tab = array();
        foreach ($styliste as $s) {

            $style = new Pricing();
            $style->id = $s['id'];
            $style->nom = $s['nom'];
            $style->prix = $s['prix'];
            $style->style = $s['style'];

            array_push($tab, $style);
        }
        return $tab;
    }

    public function GetPriceColoriste()
    {
        $sth = $this->db->prepare("SELECT * FROM prestations WHERE style='coloriste'");
        $sth->execute();
        $styliste = $sth->fetchAll();
        $tab = array();
        foreach ($styliste as $s) {

            $style = new Pricing();
            $style->id = $s['id'];
            $style->nom = $s['nom'];
            $style->prix = $s['prix'];
            $style->style = $s['style'];

            array_push($tab, $style);
        }
        return $tab;
    }

    public function GetPriceTraitements()
    {
        $sth = $this->db->prepare("SELECT * FROM prestations WHERE style='traitements'");
        $sth->execute();
        $styliste = $sth->fetchAll();
        $tab = array();
        foreach ($styliste as $s) {

            $style = new Pricing();
            $style->id = $s['id'];
            $style->nom = $s['nom'];
            $style->prix = $s['prix'];
            $style->style = $s['style'];

            array_push($tab, $style);
        }
        return $tab;
    }

    public function GetPriceEvenements()
    {
        $sth = $this->db->prepare("SELECT * FROM prestations WHERE style='evenements'");
        $sth->execute();
        $styliste = $sth->fetchAll();
        $tab = array();
        foreach ($styliste as $s) {

            $style = new Pricing();
            $style->id = $s['id'];
            $style->nom = $s['nom'];
            $style->prix = $s['prix'];
            $style->style = $s['style'];

            array_push($tab, $style);
        }
        return $tab;
    }


    public function GetPresationById($id)
    {
        $sth = $this->db->prepare("SELECT * FROM prestations WHERE id=$id");
        $sth->execute();
        $s = $sth->fetch();
        $style = new Pricing();
        $style->id = $s['id'];
        $style->nom = $s['nom'];
        $style->prix = $s['prix'];
        $style->style = $s['style'];
        return $style;
    }


    public function save()
    {
        $sth = $this->db->prepare("UPDATE prestations SET nom=? , prix=? WHERE id=?");
        $sth->execute(array($this->nom, $this->prix, $this->id));
    }


    public function ajoutPrice($nom, $prix, $style)
    {
        
        $sth = $this->db->prepare("INSERT INTO prestations (nom, prix, style) VALUES ('$nom', '$prix', '$style')");
        $sth->execute();
    }

    public function suppPrice($id){
        
        $sth = $this->db->prepare("DELETE FROM prestations WHERE id = $id");
        $sth->execute();
    }
}
