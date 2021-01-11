<?php
include_once 'connectdb_model.php';

class Images extends DB
{

    public $id;
    public $titre;
    public $descpription;
    public $image;

    public function __construct()
    {
        parent::__construct();
    }

    public function GetAllImages()
    {
        $sth = $this->db->prepare("SELECT * FROM images");
        $sth->execute();
        $images = $sth->fetchAll();
        $tab = array();
        foreach ($images as $img) {

            $pic = new Images();
            $pic->id = $img['id'];
            $pic->titre = $img['titre'];
            $pic->description = $img['description'];
            $pic->image = $img['image'];

            array_push($tab, $pic);
        }
        return $tab;
    }

    public function GetImageById($id)
    {
        $sth = $this->db->prepare("SELECT * FROM images WHERE id=$id");
        $sth->execute();
        $i = $sth->fetch();
        $pic = new Images();
        $pic->id = $i['id'];
        $pic->titre = $i['titre'];
        $pic->description = $i['description'];
        $pic->image = $i['image'];
        return $pic;
    }


    public function save()
    {
        $image = $this->image == "" ? 'image' : $this->image;
        

        $sth = $this->db->prepare("UPDATE images SET titre = '" . $this->titre . "', description = '" . $this->description . "' , image = '" . $image . "' WHERE id= '" . $this->id . "'");
        $sth->execute();
    }

    public function ajoutRea($titre, $description, $image){
        
        $sth = $this->db->prepare("INSERT INTO images (titre, description, image) VALUES ('$titre', '$description', '$image')");
        $sth->execute();
    }

    public function suppRea($id){
        
        $sth = $this->db->prepare("DELETE FROM images WHERE id = $id");
        $sth->execute();
    }
}
