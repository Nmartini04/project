<?php

include_once '../../models/pricing_model.php';

if (isset($_POST['btn_ajoutP'])) {


    $pricingController = new Pricing();
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];
    $style = $_POST['style'];
    $prestation = $pricingController->ajoutPrice($nom, $prix, $style);



    header('Location: ../backoffice');
}
