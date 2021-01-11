<?php

include_once '../../models/realisation_model.php';

if (isset($_POST['btn_modifimg'])) {
    $id = $_POST['id'];
    $pricingController = new Images();
    $image = $pricingController->GetImageById($id);
    $image->titre = $_POST['titre'];
    $image->description = $_POST['description'];
    $nomPhoto = $_FILES['image']['name'];
    $fichierTemp = $_FILES['image']['tmp_name'];
    $upload = false;


    if (file_exists($fichierTemp)) {

        $upload = move_uploaded_file($fichierTemp, '../../assets/img/realisation/' . $nomPhoto);
        $image->image = $nomPhoto;
    }

    $image->save();

    header('Location: ../backoffice');
}
