<?php
include_once '../../models/pricing_model.php';

if (isset($_POST['btn_modif'])) {

    $id = $_POST['id'];
    $pricingController = new Pricing();
    $prestation = $pricingController->GetPresationById($id);
    $prestation->nom = $_POST['nom'];
    $prestation->prix = $_POST['prix'];
    $prestation->save();
    
    header('Location: ../backoffice');
}
