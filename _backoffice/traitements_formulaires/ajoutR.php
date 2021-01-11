<?php
include_once '../../models/realisation_model.php';

if (isset($_POST['btn_ajoutR'])) {


    $imageController = new Images();
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $fichierTemp = $_FILES['image']['tmp_name'];
    $upload = move_uploaded_file($fichierTemp, '../../assets/img/realisation/' . $image);
    $newRea = $imageController->ajoutRea($titre, $description, $image);


    header('Location: ../backoffice');
}
